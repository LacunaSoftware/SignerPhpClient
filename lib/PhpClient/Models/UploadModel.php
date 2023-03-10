<?php


namespace Lacuna\Signer\PhpClient\Models;


class UploadModel
{
    public $id;
    public $name;
    public $contentType;


    public function __construct($model)
    {
        $this->id = $model->id;
        $this->name = $model->name;
        $this->contentType = $model->contentType;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getContentType()
    {
        return $this->contentType;
    }

    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
    }

}