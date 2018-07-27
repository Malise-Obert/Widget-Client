<?php

namespace controllers;

$stream = [
    'http'=>[
        'method'=>"GET",
        'header'  => "Accept: application/json\r\n" . "Content-Type: application/json\r\n",
    ]
];

$context = stream_context_create($stream);

$selectList = json_decode(file_get_contents("http://localhost:9000", false, $context));

require 'views/index.view.php';