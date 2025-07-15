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
      self::$pdo = new PDO(
        
      );
    }
  }

}

