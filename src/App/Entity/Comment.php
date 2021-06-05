<?php

namespace App\Entity;

class Comment {

        private ?int $id = null;
        private ?string $name = null;
        private ?string $comment = null;

   // HYDRATE 

    static public function hydrate (array $data): Comment
    {
        $comment = new Comment();

        $fieldsMap = [
            'id' => 'id',
            'name' => 'name',
            'comment' => 'comment',
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

        public function getName(): ?string
        {
                return $this->name;
        }

        public function getComment(): ?string
        {
                return $this->comment;
        }

    // SETTERS

        public function setComment($comment): self
        {
                $this->comment = $comment;

                return $this;
        }

        public function setName($name): self
        {
                $this->name = $name;

                return $this;
        }
}