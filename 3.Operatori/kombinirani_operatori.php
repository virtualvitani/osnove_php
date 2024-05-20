<?php
    $a = 15;
    $b = 10;

    echo $a += $b; // Ekvivalent $a = $a + $b
    echo $a -= $b; // Ekvivalent $a = $a - $b
    echo $a *= $b; // Ekvivalent $a = $a * $b
    echo $a /= $b; // Ekvivalent $a = $a / $b
    echo $a %= $b; // Ekvivalent $a = $a % $b
    echo $a .= $b; // Ekvivalent $a = $a . $b

    $ime = 'Virtual';
    $razmak = '<br>';
    $prezime = 'Vitani';

    $ime .= $razmak; // -> 'Virtual'
    $ime .= $prezime; // -> 'Virtual Vitani'
    echo $ime;

    echo $razmak;
    echo $a .= $b . '<br>';
?>