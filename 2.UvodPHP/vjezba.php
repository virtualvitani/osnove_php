<?php

$x = 5985;
var_dump(is_int($x));

echo '<br>';

$x = 10.365;
var_dump(is_float($x));

echo '<br>';

$x = "5985";
var_dump (is_numeric($x));
$x = "59.85" + 100;

echo '<br>';

// Definiranje varijabli
// $integer = 10;
// $float = 10000.50;
// $string = '10\'000,50';
// $prazanString = "";
// $bool = false;

// Ispis varijabli
// echo $integer;
// echo '<br>';
// echo $float;
// echo '<br>';
// echo $string;
// echo '<br>';
// echo $bool;
// echo '<br>';
// var_dump($bool);
// echo ('<br>');
// echo $bool ? 'DA' : 'Ne';
// echo '<br>';

// Konstante
// define ('PITAGORA', 1.41);
// const TEODOR = 1.73;

// Ispis konstanti
// echo PITAGORA;
// echo '<br>';
// print TEODOR;
// echo '<br>';

// Reference
// $a = 5;
// $b = &$a;
// print $b;
// echo '<br>';
// $a = 10;
// print $b;

$ime = 'Luka';
$Ime = 'Premuzic';

echo $ime;
echo '<br>';
echo $Ime;

define("PI", 3.14);
const OIB = '92313001800';

echo '<br>';
echo 'Vas OIB je ' . OIB . ' a ime je ' . $ime . '.';

echo '<br>';

$a = 8;
$b = $a;
$a = 3;

echo $b;

$a = 8;
$b = &$a;
echo 'Prije promjene vrijednosti a ' . $b;
$a = 3;

echo '<br>';
echo 'Nakon promjene vrijednosti a ' . $b;