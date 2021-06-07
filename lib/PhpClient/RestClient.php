<?php


namespace Lacuna\Signer\PhpClient;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\TransferException;
use GuzzleHttp\Psr7;
use InvalidArgumentException;
use UnexpectedValueException;

/**
 * Class SignerClient
 * @package Lacuna\Signer\PhpClient
 */
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

    /**
     * @return  Client
     */
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

    function getStreamClient()
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
            'stream' => true,
            'headers' => $headers,
            'http_errors' => false,
            'verify' => $verify
        ]);
    }

    /**
     * @param string $requestUrl
     * @throws Exception
     */
    function get($requestUrl)
    {
        $client = $this->getClient();
        $uri = $this->endpointUri . $requestUrl;

        try {
            $result = json_decode($client->get($uri)->getBody(), true);
        } catch (Exception $ex) {
            throw new Exception($ex);
        }


        return $result;
    }


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
        return json_decode($response->getBody(), true);
    }


    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    function postMultiPart($requestUri, $file, $name, $mimeType)
    {

        $client = $this->getClient();
        $uri = $this->endpointUri . $requestUri;

        $result = $client->request('POST', $uri, [
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

        return json_decode($result->getBody());
    }

    function put($requestUri, $request)
    {

        $client = $this->getClient();
        $uri = $this->endpointUri . $requestUri;

        try {
            $response = $client->request('PUT', $uri, [
                'body' => $request,
                'headers' => ['Content-Type' => 'application/json']
            ]);
        } catch (Exception $ex) {
            throw new Exception($ex);
        }
        var_dump($response->getStatusCode());
        return json_decode($response->getBody(), true);
    }

    function getStream($requestUri)
    {

        $client = $this->getStreamClient();
        $uri = $this->endpointUri . $requestUri;

        try {
            $result = $client->get($uri)->getBody()->getContents();
        } catch (Exception $ex) {
            throw new Exception($ex);
        }

        return $result;
    }

    /**
     * @throws Exception
     */
    function delete($requestUrl)
    {

        $client = $this->getClient();
        $uri = $this->endpointUri . $requestUrl;
        try {
            $result = $client->delete($uri);
        } catch (Exception $ex) {
            throw new Exception($ex);
        }

        if ($result->getStatusCode() != 200) {
            echo "Error " . $result->getStatusCode();
        }
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