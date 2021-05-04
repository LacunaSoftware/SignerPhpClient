<?php


namespace Lacuna\Signer\PhpClient\Builders;


use Lacuna\Signer\Model\FileUploadModel;
use Lacuna\Signer\PhpClient\Models\UploadModel;

class FileUploadBuilder extends UploadModel
{

    public $displayName;
    public $key;


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

    function toModel()
    {
        $model = new FileUploadModel();
        $model->setId($this->id);
        $model->setName($this->name);
        $model->setContentType($this->contentType);
        $model->setDisplayName($this->displayName);
        return $model;
    }


}