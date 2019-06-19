<?php

use Framework\Router;

Router::set('default', [
    'controller' => 'HomeController', 
    'action' =>'index'
]);
Router::set('about', [
    'controller' => 'HomeController', 
    'action' => 'about'
]);

Router::set('blog', [
    'controller' => 'BlogController', 
    'action' => 'index'
]);
Router::set('blog/{?}', [
    'controller' => 'BlogController', 
    'action' =>'article'
]);