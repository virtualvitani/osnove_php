<?php
$a = 27;
$b = -5;

echo "<br><p>Zbrajanje:</p>";
echo $a += $b;

$a = 27;
$b = -5;
echo "<br><p>Oduzimanje:</p>";
echo $a -= $b;

$a = 27;
$b = -5;
echo "<br><p>Mnozenje:</p>";
echo $a *= $b;

$a = 27;
$b = -5;
echo "<br><p>Dijeljenje:</p>";
echo $a /= $b;

$a = 27;
$b = -5;
echo "<br><p>Ostatak:</p>";
echo $a %= $b;

echo "<br><h1>Upravljanje stringovima</h1>";
$c = "Bok, ja sam Virtual";
$d = " Vitani.";
$f = $a.$b;

echo "<p>Odabrani stringovi:<br>
c = 'Bok, ja sam Virtual'<br>
d = ' Vitani.'</p>";

echo "<br><p>Pozivanje C+D:</p>";
echo $c.$d;
echo "<br>";

echo "<br><p>Pozivanje F:</p>";
$f = $c . $d;

echo $f;

echo "<br><h1>Upravljanje integerom</h1>";
$a += $b;

echo "a nakon a += b: " . $a . "\n";

echo "<br><h1>Upravljanje integerom</h1>";
var_dump($a > $b);

echo "<br><h1>Upravljanje integerom</h1>";
echo "a nakon inkrementa: " . (++$a) . "\n";

echo "<br><h1>Upravljanje integerom</h1>";
echo "b nakon dekrementa: " . (--$b) . "\n";