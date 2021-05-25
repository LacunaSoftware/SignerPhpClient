<?php


namespace Lacuna\Signer\PhpClient\Builders;


use Lacuna\Signer\Model\AttachmentsAttachmentUploadModel;
use Lacuna\Signer\Model\FileUploadModel;
use Lacuna\Signer\PhpClient\Models\UploadModel;

class AttachmentUploadBuilder extends UploadModel
{

    public $displayName;
    public $key;
    private $isPrivate;


    public function __construct($model)
    {
        parent::__construct($model);

    }

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getIsPrivate()
    {
        return $this->isPrivate;
    }

    /**
     * @param boolean $isPrivate
     */
    public function setIsPrivate($isPrivate)
    {
        $this->isPrivate = $isPrivate;
    }

    function toModel()
    {
        $model = new AttachmentsAttachmentUploadModel();
        $model->setId($this->id);
        $model->setName($this->name);
        $model->setContentType($this->contentType);
        $model->setDisplayName($this->displayName);
        $model->setIsPrivate($this->isPrivate);
        return $model;
    }


}