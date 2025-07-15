<?php
namespace App\Controller;
use App\Core\Abstract\AbstractController;
class SecurityController extends AbstractController{
  public function __construct(){
      $this->layout = 'security';
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
  public function login(string $login , string $password){
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
      $login = $_POST['login'];
      $password = $_POST['password'];
      if($login = '1234' && $password = 'passer'){
        echo 'Bonjour tout le monde ';
      }
    }
  }
}


