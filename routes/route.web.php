<?php
use App\Controller\ClientController;
use App\Controller\SecurityController;
 $route =  [
  '/'=>[
    'controller'=>SecurityController::class,
    'action'=>'index'
  ], 

  '/logout'=>[
    'controller'=>SecurityController::class,
    'action'=>'logout'
  ],
  '/dashbord'=>[
    'controller'=>ClientController::class,
    'action'=>'index',
    'middlewares'=>['auth']
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
