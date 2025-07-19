<?php

namespace App\Service;

use App\Core\App;
use App\Repository\CompteRepository;

class CompteService{
  private CompteRepository $compteRepository;
  private static ?CompteService $compte = null;
  public function __construct()
  {
    $this->compteRepository = App::getDependency('CompteRepository');
  }
  public static function getCompte(){
    if(self::$compte === null){
      self::$compte = new CompteService();
    }
    return self::$compte;
  }
  // cette fonction doit recuperer les comptes depuis le repository
  
}