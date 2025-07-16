<?php
namespace App\Controller;
use App\Core\Abstract\AbstractController;
use App\Service\SecurityService;
class SecurityController extends AbstractController{
  private SecurityService $securityService;
  public function __construct(){
      parent::__construct();
      $this->layout = 'security';
      $this->securityService = SecurityService::getInstance();
  }
  public function index(){
    $this->renderHtml('security/login');
  }
  public function store(){

  }
  public function edit(){

  }
  public function create(){

  }
  public function login(){
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
      //validation a faire

      extract($_POST);
    $user =  $this->securityService->seConnecter($login,$password);
    if($user){
      $this->session->set('user',$user->toArray());
      header('location: /dashbord');
      exit;
    }
    else {
      // message d'erreur $Login ou $Password incorrect
      $this->session->set('globalErreur','login ou mot de passe incorrect');
      die();
      header('location:/');
      exit();
    }
     
  }
}

}
