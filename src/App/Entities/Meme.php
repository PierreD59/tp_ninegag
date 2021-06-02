<?php

class Meme {

    private ?int $id = null;
    private ?String $name = null;
    private ?String $image = null;


    // GETTERS

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getImage()
    {
        return $this->image;
    }

    // SETTERS

    
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    // HYDRATE & CONSTRUCTOR

    public function __construct($id, $name, $image) {
            $this->setId = $id;
            $this->setName = $name;
            $this->setImage = $image;
    }

    public function hydrate (array $data): void
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }

        if (isset($data['name'])) {
            $this->name = $data['name'];
        }

        if (isset($data['illustration_image_url'])) {
            $this->image = $data['illustration_image_url'];
        }
    }
}