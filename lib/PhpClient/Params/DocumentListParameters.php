<?php


namespace Lacuna\Signer\PhpClient\Params;


use Lacuna\Signer\Model\DocumentTypes;
use Lacuna\Signer\Model\FolderType;

/**
 * Class DocumentListParameters
 * @package Lacuna\Signer\PhpClient\Params
 */
class DocumentListParameters extends PaginatedSearchParams
{

    public $isConcluded;
    public $folderId;
    public $folderType;
    public $documentType;
    public $filterByDocumentType;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return boolean
     */
    function getIsConcluded()
    {
        return $this->isConcluded;
    }

    /**
     * @param boolean $isConcluded
     */
    function setIsConcluded($isConcluded)
    {
        $this->isConcluded = $isConcluded;
    }

    /**
     * @return string
     */
    function getFolderId()
    {
        return $this->folderId;
    }

    /**
     * @param string $folderId
     */
    function setFolderId($folderId)
    {
        $this->folderId = $folderId;
    }

    /**
     * @return folderType
     */
    function getFolderType()
    {
        return $this->folderType;
    }

    /**
     * @param FolderType $folderType
     */
    function setFolderType($folderType)
    {
        $this->folderType = $folderType;
    }

    /**
     * @return documentTypes
     */

    function getDocumentTypes()
    {
        return $this->documentType;
    }

    /**
     * @param DocumentTypes $documentTypes
     */
    function setDocumentTypes($documentTypes)
    {
        $this->documentType = $documentTypes;
    }

    /**
     * @return boolean
     */
    function getFilterByDocumentType()
    {
        return $this->filterByDocumentType;
    }

    /**
     * @param boolean $filterByDocumentType
     */
    function setFilterByDocumentType($filterByDocumentType)
    {
        $this->filterByDocumentType = $filterByDocumentType;
    }

}