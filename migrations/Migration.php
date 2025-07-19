<?php 

namespace App\Migration;

use App\Core\App;
use Exception;
use PDO;

class Migration{
  private PDO $pdo ;
  private string $driver;
  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
    $this->driver =  $pdo->getAttribute(PDO::ATTR_DRIVER_NAME);
  }
  public  function run(){
    $this->createDatabase();
    $this->createTables();
    echo "connexio reussie ! ";
  }
  private function createDatabase(){
    if($this->driver === 'mysql'){
      $this->pdo->exec("CREATE DATABASE IF NOT EXITS".$_ENV['DB_NAME']);
      $this->pdo->exec("USE".$_ENV['DB_NAME']);
    }
    elseif($this->driver === 'pgsql'){
      
    }
  }
  private function createTables(){
    $sql = match($this->driver){
      'mysql' => file_get_contents(__DIR__.'/../database/script_createMysql.sql'),
      'pgsql'=>file_get_contents(__DIR__.'/../database/scrip_createPsql.sql'),
      default => throw new Exception("ce driver n'est pas disponible " )
    };
    $this->pdo->exec($sql);
  }
}

