<?php

namespace App\Repository;

use App\Aware\PdoAware;
use App\Aware\PdoAwareTrait;
use App\Entity\Comment;

class CommentRepository implements PdoAware {

    use PdoAwareTrait;

    public function checkComments(int $meme_id)
    {
        $query = $this->pdo->prepare('SELECT * FROM `comment` WHERE `meme_id` = :meme_id ');
        $query->execute([
            'meme_id' => $meme_id,
        ]);
        
        $arrayOfComments = [];

        while ($dataComments = $query->fetch()){
            $arrayOfComments[] = Comment::hydrate($dataComments);
        }

        return $arrayOfComments;
    }

    public function addNewComment($meme_id, $name, $comment)
    {
        $query = $this->pdo->prepare('INSERT INTO `comment` (`name`, `comment`, `meme_id`) VALUES (:name, :comment, :meme_id)');
        $query->execute([
            "name" => $name,
            "comment"=> $comment,
            "meme_id" => $meme_id,
        ]);

    }


}