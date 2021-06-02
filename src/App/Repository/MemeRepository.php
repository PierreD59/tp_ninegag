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
        return $query->fetchAll();
    }

    public function checkAllMeme() 
    {
        $query = $this->database->prepare('SELECT * FROM `meme`');
        $query->execute();
        $dataMeme = $query->fetchAll();

        $arrayOfMeme = [];

        foreach($dataMeme as $data)
        {
            $arrayOfMeme[] = new Meme($data);
        }
        return $arrayOfMeme;
    }
    
}