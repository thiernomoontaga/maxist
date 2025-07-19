<?php 

namespace App\Migration;

use App\Core\App;
use Exception;
use PDO;
use PDOException;

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
    if($this->driver=== "mysql"){
        $this->pdo->exec("CREATE DATABASE IF NOT EXISTS " . DB_NAME);
        $this->pdo->exec("USE " . DB_NAME);
    }elseif($this->driver=== "pgsql"){
         try {
                $pdo= new PDO("pgsql:host=127.0.0.1;port=5432;dbname=postgres", DB_USER_POSTGRES,DB_PASS_POSTGRES,[
                        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
                ]);
                $stmt = $pdo->prepare("SELECT 1 FROM pg_database WHERE datname = :dbname");
                $stmt->execute([':dbname' => DB_NAME]);

                if ($stmt->fetch()) {
                    echo "La base de données '" . DB_NAME . "' existe déjà.\n";
                } else {
                    $pdo->exec('CREATE DATABASE "' . DB_NAME . '"');
                    echo "Base de données '" . DB_NAME . "' créée avec succès.\n";
                }
                
         } catch (PDOException $e) {
            throw $e;
         }   
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

