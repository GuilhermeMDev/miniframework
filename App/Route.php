<?php

namespace App;
//Especificação PSR-4, este namespace se refere ao nome do diretório.

use MF\Init\Bootstrap;

class Route extends  Bootstrap
{

    protected function initRoutes()
    {
        $routes['home'] = array(
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'
        );

        $routes['sobre_nos'] = array(
            'route' => '/sobre_nos',
            'controller' => 'indexController',
            'action' => 'sobreNos'
        );

        $this->setRoutes($routes); //Definindo no constructor
    }


}