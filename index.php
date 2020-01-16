<?php

include_once('_config.php');
session_start();


try {

    AutomaticLoading::start();

    if (!empty($_GET['action'])) 
    {
        $request = $_GET['action'];
        
    } else {
        $request = "";
    }
    
    $router = new Router($request);
    $router->renderController();


} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}


