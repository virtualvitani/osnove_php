<?php
// Visedimenzionalni niz

$fruits = [
    ['ime' => 'Banana', 'cijena' => '12 EUR', 'klasa' => 1],
    ['ime' => 'Jagoda', 'cijena' => '9 EUR', 'klasa' => 2],
    ['ime' => 'Lubenica', 'cijena' => '6 EUR', 'klasa' => 1],
];

echo $fruits[0]['ime'];

echo '<pre>';
print_r($fruits);
echo '</pre>';

$fruits2 = [
    'Banana' => ['ime' => 'Banana', 'cijena' => '12 EUR', 'klasa' => 1],
    'Jagoda' => ['ime' => 'Jagoda', 'cijena' => '9 EUR', 'klasa' => 2],
    'Lubenica' => ['ime' => 'Lubenica', 'cijena' => '6 EUR', 'klasa' => 1],
];

echo '<pre>';
print_r($fruits2);
echo '</pre>';

echo $fruits2['Banana']['cijena'];