<?php namespace Application\Controllers;

use \Application\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view('index', [
            'message' => 'Welcome to the Erwin Tiny MVC'
        ]);
    }

    public function about()
    {
        $this->view('about', []);
    }
}
