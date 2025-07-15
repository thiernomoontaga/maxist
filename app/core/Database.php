<?php
namespace App\core;
use PDO;
class Database {
  private static ?PDO $pdo = null;

  private function __construct()
  {
    
  }
  public static function getInstance(){
    if(self::$pdo === null){
      self::$pdo = new PDO(ADRESSE,USER,PASSWORD,
      [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ]
    );
  }
   return self::$pdo;
  }
}

