<?php

// Funkcija bez parametara

function writeAlex()
{
    echo "Hello Alex <br>";
}

writeAlex();

// Funkcija sa jednim parametrom

function writeName(string $name)
{
    echo "Hello $name";
}

writeName('Mario');