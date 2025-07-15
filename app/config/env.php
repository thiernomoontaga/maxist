<?php
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(dirname(__DIR__,2));
$dotenv->load();
define('NAME',$_ENV['DB_NAME']);
define('ADRESSE',$_ENV['DB_DSN']);
define('PASSWORD',$_ENV['DB_PASS']);
define('USER',$_ENV['DB_USER']);

