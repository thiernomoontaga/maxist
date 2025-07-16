<?php
require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../app/config/bootstrap.php';
use App\Core\Router;
ini_set('display','1');
error_reporting(E_ALL);
Router::resolver();
