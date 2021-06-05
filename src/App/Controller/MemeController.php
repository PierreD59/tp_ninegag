<?php

namespace App\Controller;

use App\Aware\CommentRepositoryAwareTrait;
use App\Aware\CommentRepositoryAware;
use App\Aware\MemeRepositoryAware;
use App\Aware\MemeRepositoryAwareTrait;
use App\Aware\PdoAware;
use App\Aware\PdoAwareTrait;
use App\Aware\RequestAware;
use App\Aware\RequestAwareTrait;
use App\Aware\TwigAware;
use App\Aware\TwigAwareTrait;
use Symfony\Component\HttpFoundation\Response;

class MemeController implements PdoAware, RequestAware, TwigAware, MemeRepositoryAware, CommentRepositoryAware
{
    use PdoAwareTrait;
    use RequestAwareTrait;
    use TwigAwareTrait;
    use MemeRepositoryAwareTrait;
    use CommentRepositoryAwareTrait;

    public function home() 
    {
        $meme = $this->memeRepository->checkLastedMeme();
        return new Response($this->twig->render(
            'Home/home.html.twig', 
                [
                    "result"=>$meme
                ]
            ));
    }

    public function listOfAllMeme() 
    {
        $allMeme = $this->memeRepository->checkAllMeme();
        return new Response($this->twig->render(
            'ListMeme/listMeme.html.twig',
                [
                    "result"=>$allMeme
                ]
            ));
    }

    public function newMeme() 
    {
        if ($this->request->request->has('addNewMeme'))
        {
            $name = $this->request->request->get('name');
            $image = $this->request->request->get('image');
            $this->memeRepository->addNewMeme($name, $image);
        }

        return new Response($this->twig->render(
            'AddMeme/addMeme.html.twig'
        ));
    }

    public function memeDetail()
    {
        $meme_id = $this->request->query->get('id');
        $meme = $this->memeRepository->checkMemeById($meme_id);

        if ($this->request->request->has('addComment'))
        {
            $meme_id = $this->request->query->get('id');
            $name = $this->request->request->get('pseudo');
            $comment = $this->request->request->get('comment');
            $this->commentRepository->addNewComment($meme_id, $name, $comment);
        }

        $comments = $this->commentRepository->checkComments($meme_id);
        return new Response($this->twig->render(
            'Detail/detailMeme.html.twig', ['meme' => $meme, 'comments' => $comments], 
        ));
    }
}
