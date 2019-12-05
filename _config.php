<?php

/*** SETTINGS ***/
ini_set('display_errors', 'on');
error_reporting(E_ALL);


class AutomaticLoading
{
    public static function start()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));

        $root = $_SERVER['DOCUMENT_ROOT'];
        $host = $_SERVER['HTTP_HOST'];

        define('HOST', 'http://' . $host . '/P4_Blog_ecrivain/');
        define('ROOT',            $root . '/P4_Blog_ecrivain/');

        define('CONTROLLER', ROOT . 'controller/');
        define('MODEL',      ROOT . 'model/');
        define('VIEW',       ROOT . 'view/');
        define('CLASSES',    ROOT . 'classes/');
        define('LAYOUTS',    ROOT . 'layouts/');
        define('IMGCHAPTER', ROOT . 'public/images/chapters/');

        define('ASSETCSS',   HOST . 'public/css/');
        define('ASSETJS',    HOST . 'public/js/');
    }


    public static function autoload($class)
    {
        if (file_exists(MODEL . $class . '.php')) {
            include_once(MODEL . $class . '.php');
        } elseif (file_exists(CLASSES . $class . '.php')) {
            include_once(CLASSES . $class . '.php');
        } elseif (file_exists(CONTROLLER . $class . '.php')) {
            include_once(CONTROLLER . $class . '.php');
        };
    }
}
