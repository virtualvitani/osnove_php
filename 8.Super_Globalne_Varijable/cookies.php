<?php

var_dump(time());

$expiresIn = time() + 60 * 60;

setcookie('user', 'VirtualVitani', $expiresIn, '/');

var_dump($_COOKIE);

setcookie('user', 'Geralt of Rivia', time() - 60 * 6000);