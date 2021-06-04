<?php

namespace App\Controller;

use App\Aware\MemeRepositoryAware;
use App\Aware\MemeRepositoryAwareTrait;
use App\Aware\PdoAware;
use App\Aware\PdoAwareTrait;
use App\Aware\RequestAware;
use App\Aware\RequestAwareTrait;
use App\Aware\TwigAware;
use App\Aware\TwigAwareTrait;
use Symfony\Component\HttpFoundation\Response;

class MemeController implements PdoAware, RequestAware, TwigAware, MemeRepositoryAware
{
    use PdoAwareTrait;
    use RequestAwareTrait;
    use TwigAwareTrait;
    use MemeRepositoryAwareTrait;

    public function home() {
        $meme = $this->memeRepository->checkLastedMeme();
        return new Response($this->twig->render(
            'Home/home.html.twig', 
                [
                    "result"=>$meme
                ]
            ));
    }

    public function listmeme() {
        $allMeme = $this->memeRepository->checkAllMeme();
        return new Response($this->twig->render(
            'ListMeme/listMeme.html.twig',
                [
                    "result"=>$allMeme
                ]
            ));
    }

    public function new() {
        if ($this->request->request->has('addNewMeme'))
        var_dump($this->request->request->has('addNewMeme'));
        {
            $name = $this->request->request->get('name');
            $image = $this->request->request->get('image');
            $this->memeRepository->addNewMeme($name, $image);
        }

        return new Response($this->twig->render(
            'AddMeme/addMeme.html.twig'
            ));
    }
}
