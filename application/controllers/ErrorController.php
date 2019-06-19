<?php namespace Application\Controllers;

class ErrorController extends \Application\Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function display($errorCode, $resource = null)
    {
        $this->view("errors/$errorCode", ['resource' => $resource]);
    }
}