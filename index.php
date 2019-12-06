<?php

session_start();

include_once('_config.php');

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


