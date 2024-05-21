<?php

$a = 10;
$b = 20;

$a++; // Ekvivalent $a +1;
++$b; // 21

echo $b; // 21
echo '<br>';

echo $b--; // 21
echo '<br>';

echo --$b; // 19

// Vrste operatora, prednost pri izvodenju izraza
// ()
// !
// */
// %
// +-
// <> <= >=
// !== !=
// &&
// ||

echo '--------------';
echo '<br>';

// Primjer redosljeda izvrsavanja
echo 2 + 3 * 4;
echo '<br>';
echo 2 + 3 - 4;
echo '<br>';
echo (2 + 3) * 4;