<?php

namespace App\Repository;

use App\Aware\PdoAware;
use App\Aware\PdoAwareTrait;
use App\Entity\Meme;

class MemeRepository implements PdoAware {

    use PdoAwareTrait;

    public function checkLastedMeme() 
    {
        $query = $this->pdo->prepare('SELECT * FROM `meme` ORDER BY `id` desc LIMIT 10');
        $query->execute();

        $arrayOfLastedMeme = [];

        while ($dataMeme = $query->fetch()){
            $arrayOfLastedMeme[] = Meme::hydrate($dataMeme);
        }
        
        return $arrayOfLastedMeme;
    }

    public function checkAllMeme() 
    {
        $query = $this->pdo->prepare('SELECT * FROM `meme`');
        $query->execute();

        $arrayOfMeme = [];

        while ($dataMeme = $query->fetch()){
            $arrayOfMeme[] = Meme::hydrate($dataMeme);
        }
        
        return $arrayOfMeme;
    }
    
}