<?php


namespace Lacuna\Signer\PhpClient\Models;


class UploadModel
{
    public $location;
    public $id;
    public $name;
    public $contentType;


    public function __construct($model)
    {
        $this->location = $model->location ;
        $this->id = $model->id;
        $this->name = $model->name;
        $this->contentType = $model->contentType;
    }

    public function getlocation()
    {
        return $this->location;
    }

    public function setlocation($location)
    {
        $this->location = $location;
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
        //echo $this->name;
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