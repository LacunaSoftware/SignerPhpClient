<?php

namespace Lacuna\Signer\PhpClient;

use Exception;
use Lacuna\Signer\Model\DocumentsCreateDocumentResult;
use Lacuna\Signer\Model\DocumentsDocumentListModel;
use Lacuna\Signer\Model\FoldersFolderInfoModel;
use Lacuna\Signer\Model\PaginatedSearchResponseDocumentsDocumentListModel;
use Lacuna\Signer\Model\PaginatedSearchResponseFoldersFolderInfoModel;
use Lacuna\Signer\PhpClient\Params\DocumentListParameters;
use Lacuna\Signer\PhpClient\Params\PaginatedSearchParams;
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
     * @return DocumentsCreateDocumentResult[]
     * @throws Exception
     */
    function createDocument($request)
    {
        $response = $this->getRestClient()->post("/api/documents", $request);
        $result = array();
        foreach ($response as $element) {
            array_push($result, new DocumentsCreateDocumentResult($element));
        }
        return $result;
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
     * @return  PaginatedSearchResponseFoldersFolderInfoModel
     * @throws \Exception
     */
    function listFoldersPaginated($searchParams, $organizationId)
    {
        $requestUri = "/api/folders" . $this->buildSearchPaginatedParamsString($searchParams) . "&organizationId=" . $this->getParameterOrEmpty($organizationId);
        $response = $this->getRestClient()->get($requestUri);

        $result = array();

        foreach ($response["items"] as $element) {
            array_push($result, new FoldersFolderInfoModel($element));
        }

        $model = new PaginatedSearchResponseFoldersFolderInfoModel($response);
        $model->setItems($result);
        $model->setTotalCount($response["totalCount"]);

        return $model;
    }

    /**
     * @return PaginatedSearchResponseDocumentsDocumentListModel
     * @throws \Exception
     */
    function listDocuments($searchParams)
    {
        $requestUri = "/api/documents?" . $this->buildSearchDocumentListString($searchParams);
        $response = $this->getRestClient()->get($requestUri);

        $result = array();

        foreach ($response["items"] as $element) {
            array_push($result, new DocumentsDocumentListModel($element));
        }

        $model = new PaginatedSearchResponseDocumentsDocumentListModel();
        $model->setItems($result);
        $model->setTotalCount($response["totalCount"]);

        return $model;
    }

    /**
     * @param PaginatedSearchParams $searchParams
     * @throws Exception
     */
    function buildSearchPaginatedParamsString($searchParams)
    {
        return "?q=" . $this->getParameterOrEmpty($searchParams->getQ()) . "&limit=" . $searchParams->getLimit() . "&offset=" . $this->getParameterOrZero($searchParams->getOffset());
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


    function getParameterOrZero($parameter)
    {
        if ($parameter == null || strlen($parameter) == 0) {
            return "0";
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