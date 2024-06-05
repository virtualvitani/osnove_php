<?php

// napravit funkciju koja prima ime,prezime (GeRaLt oF rIvIa) i kao rezulata vraca Geralt of Rivia

function formatName(string $name)
{
    $nameArray = explode(',', $name);

    $name = $nameArray[0];
    $surname = $nameArray[1];
    $surname = ucfirst(mb_strtolower($surname));

    $firstLetter = substr($name, 0, 1);
    $firstLetter = mb_strtoupper($firstLetter);

    return "$firstLetter. $surname";
}

$formattedName = formatName('GeRaLt oF rIvIa');

echo $formattedName;



function prettyPrint(array $print): void
{
    echo "<pre>";
    print_r($print);
    echo "</pre>";
}