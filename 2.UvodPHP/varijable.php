<?php

// Imena varijabli su osjetljiva na velika i mala slova
$ime = 'VirtualVitani';
$Ime = 'Virtual_Vitani';

echo $ime;
echo '<br>';
echo $Ime;

// Primjer neispravne definicije imena varijable
// $123ime;
// $-ime;
// $ ime;

// Nakon zanaka $ ime varijable moze zapoceti sa slovom ili _ (donja crta)
// Primjer ispravne definicije imena varijable
// $_ime;
// $ime123;
// $ime_prezime_i_adresa; -> Snake case
// $imePrezimeIAdresa; -> Camel Case

// KONSTANTE
// Imena konstanti trebalo bi pisati velikim slovima

define("PI", 3.14);
const OIB = '92313001800';

echo '<br>';
echo 'Vas OIB je ' . OIB . ' a ime je ' . $Ime . '.';