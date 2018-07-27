<?php

require 'Router.php';

$router = new Router();

$router->define([
    '' => 'controllers/index.php',
    'apply' => 'controllers/apply.php',
]);

require $router->direct(trim($_SERVER['REQUEST_URI'], '/'));

//error_reporting(E_ERROR | E_PARSE);

//$data = ['Name' => 'Malise', 'Surname' => 'Obert'];
//$method = "apply";
//$url = "http://localhost:8000";
////$url = "http://localhost:8000";
//$opts = array('http' =>
//    array(
//        'method'  => 'POST',
//        'header'  => "Accept: application/json\r\n" . "Content-Type: application/json\r\n",
//        'content' => json_encode($data)
//    )
//);
//$context  = stream_context_create($opts);
//$result = file_get_contents($url, false, $context);

//echo "<pre>";
//print_r($_SERVER);
//echo "</pre>";

//$data = array (
//    "limit"	=>	5,
//    "api_key" 		=>	'YOUR_API_KEY',
//    "api_secret"	=>	'YOUR_API_SECRET',
//);
//$method = "getCallDetails";
//$url = "http://localhost:8000/$method";
//$opts = array('http' =>
//    array(
//        'method'  => 'POST',
//        'header'  => "Accept: application/json\r\n" . "Content-Type: application/json\r\n",
//        'content' => json_encode($data)
//    )
//);
//$context  = stream_context_create($opts);
//$result = file_get_contents($url, false, $context);
?>




















