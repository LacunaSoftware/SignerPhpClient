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

    public $IsConcluded;
    public $FolderId;
    public $FolderType;
    public $DocumentType;
    public $FilterByDocumentType;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return boolean
     */
    function getIsConcluded()
    {
        return $this->IsConcluded;
    }

    /**
     * @param boolean $IsConcluded
     */
    function setIsConcluded($IsConcluded)
    {
        $this->IsConcluded = $IsConcluded;
    }

    /**
     * @return string
     */
    function getFolderId()
    {
        return $this->FolderId;
    }

    /**
     * @param string $FolderId
     */
    function setFolderId($FolderId)
    {
        $this->FolderId = $FolderId;
    }

    /**
     * @return FolderType
     */
    function getFolderType()
    {
        return $this->FolderType;
    }

    /**
     * @param FolderType $FolderType
     */
    function setFolderType($FolderType)
    {
        $this->FolderType = $FolderType;
    }

    /**
     * @return DocumentTypes
     */

    function getDocumentTypes()
    {
        return $this->DocumentType;
    }

    /**
     * @param DocumentTypes $DocumentTypes
     */
    function setDocumentTypes($DocumentTypes)
    {
        $this->DocumentType = $DocumentTypes;
    }

    /**
     * @return boolean
     */
    function getFilterByDocumentType()
    {
        return $this->FilterByDocumentType;
    }

    /**
     * @param boolean $FilterByDocumentType
     */
    function setFilterByDocumentType($FilterByDocumentType)
    {
        $this->FilterByDocumentType = $FilterByDocumentType;
    }

}