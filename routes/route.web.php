<?php
use App\Controller\SecurityController;
 $route =  [
  '/'=>[
    'controller'=>SecurityController::class,
    'action'=>'index'
  ], 

  '/deconnexion'=>[
    'controller'=>SecurityController::class,
    'action'=>'deconnexion'
  ],
  '/login'=>[
    'controller'=>SecurityController::class,
    'action'=>'login'
  ],
  '/compte/creer'=>[
    'controller'=>SecurityController::class,
    'action'=>'create'
  ],
  '/compte/enregistrer'=>[
    'controller'=> SecurityController::class,
    'action' => 'save'
  ]
];

return $route;
