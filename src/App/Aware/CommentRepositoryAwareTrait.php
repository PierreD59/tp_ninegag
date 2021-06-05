<?php

namespace App\Aware;

use App\Repository\CommentRepository;

trait CommentRepositoryAwareTrait
{
    private ?CommentRepository $commentRepository = null;

    public function setCommentRepository(CommentRepository $commentRepository) {
        $this->commentRepository = $commentRepository;
    }

}
