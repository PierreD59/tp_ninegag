<?php

namespace App\Repository;

use App\Aware\PdoAware;
use App\Aware\PdoAwareTrait;
use App\Entity\Comment;

class CommentRepository implements PdoAware {

    use PdoAwareTrait;

    public function checkComment()
    {
        $query = $this->pdo->prepare('SELECT * FROM `comment` WHERE `id` = :id');
        $query->execute(
            [
                "id" => 
            ]
        );
    }
}