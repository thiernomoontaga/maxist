<?php

use App\Core\Database;
use App\Core\Session;
use App\Repository\PersonneRepository;
use App\Service\SecurityService;

return [
  "core" =>[
    "session"=>  Session::class,
    "Databse"=> Database::class,
  ],
  "repository" => [
    "Personne" =>  PersonneRepository::class,
  ],
  "service" => [
    "security" => SecurityService::class
  ]

];



