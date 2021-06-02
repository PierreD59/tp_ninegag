<?php

namespace App\Repository;

use App\Aware\PdoAware;
use App\Aware\PdoAwareTrait;
use App\Entity\Meme;

class MemeRepository implements PdoAware {

    use PdoAwareTrait;

    public function checkLastedMeme() 
    {
        $query = $this->database->prepare('SELECT * FROM `meme` ORDER BY `id` LIMIT 10');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function checkAllMeme() 
    {
        $query = $this->database->prepare('SELECT * FROM `meme`');
        $query->execute();
        $dataMeme = $query->fetchAll(PDO::FETCH_ASSOC);

        $arrayOfMeme = [];

        foreach($dataMeme as $data)
        {
            $arrayOfMeme[] = new Meme($data);
        }
        return $arrayOfMeme;
    }
    
}