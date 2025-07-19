<?php
namespace App\Controller;
use App\Core\Abstract\AbstractController;
use App\Core\App ;
use App\Service\SecurityService;
use App\Core\Validator;
class SecurityController extends AbstractController{
  private SecurityService $securityService;
  public function __construct(){
      parent::__construct();
      $this->layout = 'security';
      $this->securityService = App::getDependency('SecurityService');
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
      $post = [
        'login' => trim($_POST['login']?? '') ,
        'password'=>trim($_POST['password'] ?? '') 
      ];
      Validator::validate($post,['login' =>['required','email'],'password' =>['required']]);
      Validator::getErrors();
      if(Validator::isValid()){
        extract($post);
        $user =  $this->securityService->seConnecter($login,$password);
        if($user){
          
          $this->session->set('user',$user->toArray());
          
          header('location: /dashbord');
          exit;
        }
        else {
          Validator::addError('globalErrors','login ou mot de passe incorrect');
          $this->session->set('errors',Validator::getErrors());
          header('location:/');
          exit();
        }
      }
      else {
        Validator::addError('globalErrors','les champs ne sont pas valides ');
        $this->session->set('errors',Validator::getErrors());
        header('location:/');
        exit;
      }
   }
 }
  public function logout(){
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
     $this->session->destroy();
     header('location:/');
     exit;
    }
    header('location:/dashbord');
    exit;
   }
}


