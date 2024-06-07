<?php

session_start();

$_SESSION['user'] = [
    'ime' => 'VirtualVitani',
    'adresa' => '56'
];

var_dump($_SESSION);