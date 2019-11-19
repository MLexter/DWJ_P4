<?php

/*** SETTINGS ***/
ini_set('display_errors', 'on');
error_reporting(E_ALL);


$root = $_SERVER['DOCUMENT_ROOT'];
$host = $_SERVER['HTTP_HOST'];

define('HOST', 'http://'. $host . '/P4_blog_ecrivain/');
define('ROOT', $root . '/P4_blog_ecrivain/');

define('CONTROLLER', ROOT.'controller/');
define('MODEL', ROOT.'model/');
define('VIEW', ROOT.'view/');

define('ASSETCSS', HOST.'public/css/');
define('ASSETJS', HOST.'public/js/');




