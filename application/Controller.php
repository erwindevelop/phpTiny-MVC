<?php namespace Application;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

abstract class Controller
{
    private $twig;

    public function __construct()
    {
        $this->twig = new Environment(new FilesystemLoader(VIEWS), [
            'cache' => STORAGE . 'cache',
            'debug' => true
        ]);
    }

    protected function view($view, $params = [])
    {
        echo $this->twig->render("$view.twig", $params);
    }
}
