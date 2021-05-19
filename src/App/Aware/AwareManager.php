<?php

namespace App\Aware;

use PDO;
use Symfony\Component\HttpFoundation\Request;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class AwareManager
{
    private Request $request;
    private ?PDO $pdo = null;
    private ?Environment $twig = null;

    public function __construct(Request $request) {

        $this->request = $request;
    }

    public function manage(object $object)
    {
        if ($object instanceof PdoAware) {
            if (!$this->pdo) {
                $this->pdo = new PDO('mysql:host=localhost;dbname=tp_ninegag;charset=utf8', 'root', '');
            }
            $object->setPdo($this->pdo);
        }

        if ($object instanceof RequestAware) {
            $object->setRequest($this->request);
        }

        if ($object instanceof TwigAware) {
            if (!$this->twig) {
                $loader = new FilesystemLoader(__DIR__ . "/../Template");
                $this->twig = new Environment($loader);
            }
            $object->setTwig($this->twig);
        }
    }
}
