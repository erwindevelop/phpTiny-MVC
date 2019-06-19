<?php
use SebastianBergmann\Environment\Console;

ini_set('error_log', 'storage/error_log');
ini_set('error_reporting', 'E_ALL');
ini_set('log_errors', 1);
ini_set('log_errors_max_length', 0);

require __DIR__.'/../vendor/autoload.php';

require_once __DIR__.'/../config/paths.php';
require_once __DIR__.'/../config/application.php';
require_once __DIR__.'/../config/database.php';

require ROUTES.'web.php';

new Framework\Database;

session_start();

$request = $_GET['resource'] ?? 'default';

Framework\Router::load($request);