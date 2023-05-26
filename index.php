<?php
    require 'providers/database.php';

    $controller= 'HomePageController';

    if(!isset($_REQUEST['controller'])){
        require "controllers/". $controller .".php";

        $controller= ucwords($controller);
        $controller= new $controller;
        $controller->index();

    }else{
        $controller= ucwords($_REQUEST['controller'].'Controller');
        $method= isset($_REQUEST['method']) ? $_REQUEST['method'] : 'index';

        require "controllers/".$controller.".php";
        $controller= new $controller;

        call_user_func(array($controller, $method));
    
    }