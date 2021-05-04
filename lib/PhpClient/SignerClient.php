<?php

namespace Lacuna\Signer\PhpClient;

use Exception;
use Lacuna\Signer\Model\PaginatedSearchResponseDocumentsDocumentListModel;
use Lacuna\Signer\PhpClient\Params\DocumentListParameters;
use Lacuna\Signer\PhpClient\RestClient;
use ReflectionClass;
use ReflectionProperty;


/**
 * Class SignerClient
 * @package Lacuna\Signer\PhpClient
 */
class SignerClient
{
    protected $apiKey;
    protected $endpointUri;
    protected $restClient;

    /**
     * @param string $endpointUri
     * @param string $apiKey
     * @throws Exception
     */
    public function __construct($endpointUri, $apiKey)
    {
        $this->endpointUri = $endpointUri;
        $this->apiKey = $apiKey;
    }

    /**
     * @return RestClient
     */
    function getRestClient()
    {
        if ($this->restClient == null) {
            $this->restClient = new RestClient($this->endpointUri, $this->apiKey);
        }

        return $this->restClient;

    }

    /**
     * @param string $request
     * @throws Exception
     */
    function createDocument($request)
    {
        $result = $this->getRestClient()->post("/api/documents", $request);
        return $result[0];
    }

    /**
     * @param string $id
     * @throws Exception
     */
    function getDocumentDetails($id)
    {
        $requestUri = "/api/documents/" . $id;
        $restClient = $this->getRestClient();
        $result = $restClient->get($requestUri);

        return $result;
    }

    /**
     * @param string $name
     * @param string $mimeType
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    function uploadFile($name, $file, $mimeType)
    {
        $requestUri = "/api/uploads";
        $restClient = $this->getRestClient();

        $result = $restClient->postMultiPart($requestUri, $file, $name, $mimeType);

        return $result;
    }

    /**
     * @param string $id
     * @throws Exception
     */
    function deleteDocument($id)
    {
        $requestUri = "/api/documents/" . $id;
        $restClient = $this->getRestClient();
        $restClient->delete($requestUri);
    }

    /**
     * @throws \Exception
     */
    function listDocuments($searchParams)
    {
        $requestUri = "/api/documents?" . $this->buildSearchDocumentListString($searchParams);
        $response = $this->getRestClient()->get($requestUri);
        $model = new PaginatedSearchResponseDocumentsDocumentListModel();

        return $response;
    }

    /**
     * @param DocumentListParameters $searchParams
     * @throws Exception
     */
    function buildSearchDocumentListString($searchParams)
    {
        return "IsConcluded=" . json_encode($searchParams->getIsConcluded()) . "&OrganizationType=Normal&FolderType=Normal&FilterByDocumentType=False&Q=" . $this->getParameterOrEmpty($searchParams->getQ()) . "&Limit=" . $searchParams->getLimit() . "&Offset=0&Order=" . $searchParams->getOrder();
    }


    function getParameterOrEmpty($parameter)
    {
        if ($parameter == null || strlen($parameter) == 0) {
            return "";
        }

        try {
            return urlencode($parameter);
        } catch (Exception $e) {
            return "";

        }
    }

    function objectToArray($object)
    {
        if (!is_object($object) && !is_array($object))
            return $object;

        return array_map('objectToArray', (array)$object);
    }
}