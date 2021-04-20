<?php


namespace Lacuna\Signer\PhpClient;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\TransferException;
use GuzzleHttp\Psr7;
use InvalidArgumentException;
use UnexpectedValueException;

class RestClient
{

    private $endpointUri;
    private $apiKey;
    private $caInfoPath;
    private $usePhpCAInfo;


    public function __construct($endpointUri, $apiKey, $usePhpCAInfo = false, $caInfoPath = null)
    {
        $this->endpointUri = $endpointUri;
        $this->apiKey = $apiKey;


        $this->usePhpCAInfo = $usePhpCAInfo;

        if (!isset($caInfoPath)) {
            $caInfoPath = __DIR__ . '/../../resources/ca-bundle-old.pem';
        }
        $this->caInfoPath = $caInfoPath;
    }

    function getClient()
    {
        $headers = [
            'Accept' => 'application/json'
        ];

        if (!empty($this->apiKey)) {
            $headers['X-Api-Key'] = $this->apiKey;
        }

        $verify = true;

        if (!$this->usePhpCAInfo) {
            if (!isset($this->caInfoPath)) {
                throw new UnexpectedValueException('No CA certificates path was provided. Set the "usePhpCAInfo" variable to true if you want to use the default value that your PHP uses.');
            }
            if (!file_exists($this->caInfoPath)) {
                throw new InvalidArgumentException("The provided cacert file does not exist: {$this->caInfoPath}.");
            }
            $verify = $this->caInfoPath;
        }

        return new Client([
            'base_uri' => $this->endpointUri,
            'headers' => $headers,
            'http_errors' => false,
            'verify' => $verify
        ]);
    }

    /**
     * @throws Exception
     */
    function get($requestUrl)
    {
        $verb = 'GET';
        $client = $this->getClient();
        $uri = $this->endpointUri . $requestUrl;

        try {
            $result = $this->jsonDecode($client->get($uri)->getBody());
        } catch (Exception $ex) {
            throw new Exception($ex);
        }


        return $result;
    }

    /**
     * @throws Exception
     */
//    function post($requestUrl, $request)
//    {
//        $options = [  'headers' => ['Content-Type' => 'application/json'],
//            'body' => "{\"files\":[{\"displayName\":\"One Signer Sample\",\"id\":\"bf42a204-2dc7-4803-ac41-4d76ccc146ac\",\"name\":\"name\",\"contentType\":\"application/pdf\"}],\"flowActions\":[{\"type\":\"Signer\",\"user\":{\"name\":\"Jack Bauer\",\"identifier\":\"75502846369\",\"email\":\"jack.bauer@mailinator.com\"}}]}"];
//        $client = $this->getClient();
//        $uri = $this->endpointUri . $requestUrl;
//
//        try {
//            $result = $this->jsonDecode($client->post($uri)->getBody());
//        } catch (Exception $ex) {
//            throw new Exception($ex);
//        }
//
//
//        return $result;
//    }

    /**
     * @throws \Exception
     */
    function post($requestUri, $request)
    {

        $client = $this->getClient();
        $uri = $this->endpointUri . $requestUri;
        try {
            $response = $client->request('POST', $uri, [
                'body' => $request,
                'headers' => ['Content-Type' => 'application/json']
            ]);
        } catch (Exception $ex) {
            throw new Exception($ex);
        }
        return $this->jsonDecode($response->getBody());
    }


    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    function postMultiPart($requestUri, $file, $name, $mimeType)
    {

        $client = $this->getClient();
        $uri = $this->endpointUri . $requestUri;

        return $client->request('POST', $uri, [
            'multipart' => [
                [
                    'name' => 'content',
                    'contents' => $file,
                ],
                [
                    'name' => 'name',
                    'contents' => $name,
                ],
                [
                    'name' => 'contentType',
                    'contents' => $mimeType,
                ],
            ]
        ]);
    }

    function jsonDecode($json)
    {
        return json_decode($json, true);
    }

    function jsonEncode($json)
    {
        return json_encode($json);
    }

    function array_change_key_case_recursive($arr)
    {
        return array_map(function ($item) {
            if (is_array($item))
                $item = $this->array_change_key_case_recursive($item);
            return $item;
        }, array_change_key_case($arr));
    }

    function capital($arr)
    {
        foreach ($arr as $key => $value) {
            $newkey = preg_replace('/\B([A-Z])/', '_$1', $key);
            $arr[$newkey] = $value;
            unset($arr[$key]);
        }
        return $arr;
    }

}