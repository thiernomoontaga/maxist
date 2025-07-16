<?php

namespace App\Controller;

use App\Core\Abstract\AbstractController;

class ClientController extends AbstractController{
  public function __construct()
  {
    parent::__construct();
  }


  //methode qui affiche le dashbord
  //methode qui creer un compte secondaire
  //methode qui changement le compte secondaire en principale
  //methode qui liste les comptes 
  //
  public function index(){
    $this->renderHtml('client/dashbord');
  }
  public function store(){}
  public function edit(){}
  public function create(){}
  
}
