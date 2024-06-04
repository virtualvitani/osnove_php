<?php

const FILE_PATH = __DIR__ . '/podaci/knjige.json';

$books = file_get_contents(FILE_PATH);

$books = json_decode($books, true);

$books[] = [
    "title" => "Witcher - Time Of Contempt",
    "author" => "Andrzej Sapkowski",
    "available" => false,
    "pages" => 421,
    "isbn" => 28482482392
];

$books = json_encode($books);

file_put_contents(FILE_PATH, $books);