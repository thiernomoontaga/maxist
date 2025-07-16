<?php
use App\Controller\ClientController;
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
  '/dashbord'=>[
    'controller'=>ClientController::class,
    'action'=>'index'
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
