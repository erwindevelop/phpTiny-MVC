<?php namespace Application\Controllers;

use \Application\Controller;
use \Application\Models\Category;

class BlogController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view('blog/index', []);
    }

    public function article($slug)
    {
        echo $slug;
        
    }
}