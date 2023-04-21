<?php

namespace App\Controllers;

use App\Router\Attributes\Get;
use App\Router\Attributes\Route;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\ArrayLoader;
use Twig\Loader\FilesystemLoader;

class HomeController extends BaseController
{
    /*
    private readonly FilesystemLoader $loader;
    private readonly Environment $twig;
    public function __construct()
    {
        $this->loader = new FilesystemLoader('Views');
        $this->twig = new Environment($this->loader);
    }
    */

    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    #[Get('/')]
    public function Index () {

        $loader = new FilesystemLoader("Views");
        $twig = new Environment($loader);

        echo $twig->render('Home.html.twig', ['name' => 'Fabien']);
    }
}