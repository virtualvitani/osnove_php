<?php

$a = 10;
$b = 0;

// Type casting -> Promjena tipa podatka
(string)$a;

var_dump( (bool)$a   ); // true
var_dump( boolval($b)   ); // false

var_dump( !$a ); // false

//Operator && zahtijeva da su svi izrazi istiniti kako bi vratio true
var_dump($a && $b); // false
var_dump( ($a > $b) && ($b == $a) ); // false

var_dump(false && true); // false
var_dump(true && false); // false
var_dump(false && false); // true
var_dump(true && true); // false

// Operator || zahtijeva da je bar jedan izraz istiniti kako bi vratio true
var_dump(true || false); // true
var_dump(false || true); // true
var_dump(true || true); // true
var_dump(false || false); // false

// Vrijednosti koje vracaju FALSE
$var = false;
$var = 0;
$var = 0.0;
$var = '';
$var = '0';
$var = [];
$var = NULL;

if ( '0' ) {
    echo 'Izraz je istinit.';
}