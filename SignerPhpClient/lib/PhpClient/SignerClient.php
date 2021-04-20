<?php

namespace Lacuna\Signer\PhpClient;

use Lacuna\Signer\PhpClient\RestClient;
use ReflectionClass;
use ReflectionProperty;

class SignerClient
{
    protected $apiKey;
    protected $endpointUri;
    protected $restClient;

    public function __construct($endpointUri, $apiKey)
    {
        $this->endpointUri = $endpointUri;
        $this->apiKey = $apiKey;
    }

    function getRestClient()
    {
        if ($this->restClient == null) {
            $this->restClient = new RestClient($this->endpointUri, $this->apiKey);
        }

        return $this->restClient;

    }

    
    function createDocument($request)
    {
        $result = $this->getRestClient()->post("/api/documents", $request);
        return $result[0];
    }


    function objectToArray($object)
    {
        if (!is_object($object) && !is_array($object))
            return $object;

        return array_map('objectToArray', (array)$object);
    }


    function getDocumentDetails($id)
    {
        $requestUri = "/api/documents/" . $id;
        $restClient = $this->getRestClient();
        $result = $restClient->get($requestUri);

        return $result;
    }

    function uploadFile($name, $file, $mimeType)
    {
        $requestUri = "/api/uploads";
        $restClient = $this->getRestClient();

        $result = json_decode($restClient->postMultiPart($requestUri, $file, $name, $mimeType)->getBody());

        return $result;
    }
}