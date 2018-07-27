<?php

namespace controllers;

//todo Refactor api requests to use the currently dump CallAPI class...

$stream = [
    'http'=>[
        'method'=>"POST",
        'header'  => "Accept: application/json\r\n" . "Content-Type: application/json\r\n",
        'content' => json_encode($_POST)
    ]
];

$context = stream_context_create($stream);

$response = json_decode(file_get_contents("http://localhost:9000", false, $context));

require 'views/apply.view.php';
