<?php

namespace App\Entity;

class Comment {

        private ?int $id = null;
        private ?String $comment = null;
        private ?Datetime $createdAt = null;

   // HYDRATE 

    static public function hydrate (array $data): Comment
    {
        $comment = new Comment();

        $fieldsMap = [
            'id' => 'id',
            'comment' => 'comment',
            'createdAt' => 'createdAt',
        ];

        foreach ($fieldsMap as $propertyName => $fieldName) {
            if (isset($data[$fieldName])) {
                $comment->{$propertyName} = $data[$fieldName];
            }
        }

        return $comment;
    }

    // GETTERS

        public function getId(): ?int
        {
                return $this->id;
        }
        
        public function getComment(): ?string
        {
                return $this->comment;
        }

        public function getCreatedAt(): ?DateTime
        {
                return $this->createdAt;
        }


    // SETTERS
        public function setCreatedAt(?Datetime $createdAt): self
        {
                $this->createdAt = $createdAt;

                return $this;
        }

        public function setComment($comment): self
        {
                $this->comment = $comment;

                return $this;
        }


}