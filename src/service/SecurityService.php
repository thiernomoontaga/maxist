<?php 
namespace App\Service;

use App\Core\App ;
use App\Entity\Utilisateur;
use App\Repository\PersonneRepository;

class SecurityService {
  private static ?SecurityService $securityService = null;
  private  PersonneRepository $personneRepository;
  
  public  function __construct()
  {
    $this->personneRepository = App::getDependency('PersonneRepository');
  }
  public static function getInstance (){
    if(self::$securityService === null){
      self::$securityService = new SecurityService();
    }
    return self::$securityService;
  }
  public function seConnecter(string $login, string $password):?Utilisateur{
   $personne =  $this->personneRepository->findByLogin($login);
   if($personne && $personne->getPassword() === $password){
    return $personne;
   }
   return null;
  }
}

