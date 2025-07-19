<?php

namespace App\Repository;
use App\Entity\Utilisateur;
use App\Entity\Compte;
use App\Core\Abstract\AbstractRepository;
use App\Core\App;

class CompteRepository extends AbstractRepository{
    private static ?CompteRepository $compteRepository = null;
    public function __construct()
    {
      parent::__construct();
      $this->pdo = App::getDependency('Database');
      $this-> table = 'compte';
    }
    public static function getInstance(){
      if(self::$compteRepository === null){
        self::$compteRepository = new CompteRepository();
      }
      return self::$compteRepository;
    }
    public function findCompteByUser(Utilisateur $user){
      $query = 'select * from '.$this->table.'where idutilisateur = :idutilisateur';
      $stmt = $this->pdo->prepare($query);
      $stmt->execute([':idutilisateut'=>$user->getId()]);
      $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);
      return array_map(fn($compte)=> Compte::toObject($compte),$rows);
    }
     public function SelectAll(){}
     public function update(){}
     public function insert(){}
     public function selectById(){}
     public function delete(){}
}




