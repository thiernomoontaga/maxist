<?php
namespace App\Core\Abstract;

abstract class AbstractController{
  protected $layout = 'base';
  abstract  public function index();
  abstract public function store();
  abstract public function edit();
  abstract public function create();
  public function renderHtml(string $view,array $data=[]):void{
    ob_start();
    require_once __DIR__.'/../../../template/'.$view.'.html.php';
    $content = ob_get_clean();
    require_once __DIR__.'/../../../template/layout/'.$this->layout.'.layout.php';
  }
}

