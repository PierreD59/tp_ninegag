<?php

namespace App\Entity;


class Meme {

    private ?int $id = null;
    private ?String $name = null;
    private ?String $image = null;

   // hydrate 

    static public function hydrate (array $data): Meme
    {
        $meme = new Meme();

        $fieldsMap = [
            'id' => 'id',
            'name' => 'name',
            'illustration_image_url' => 'illustration_image_url',
        ];

        foreach ($fieldsMap as $propertyName => $fieldName) {
            if (isset($data[$fieldName])) {
                $meme->{$propertyName} = $data[$fieldName];
            }
        }

        return $meme;
    }

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
}