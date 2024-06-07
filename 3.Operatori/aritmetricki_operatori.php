<?php
    $a = 15;
    $b = -5;
    // $c = $a - $b;

    echo $a - $b;
    echo '<br>';
    echo $a + $b;
    echo '<br>';
    echo $a * $b;
    echo '<br>';
    echo $a / $b;
    echo '<br>';

    // Operator Modula -> Vraca ostatak od dijeljenja
    echo $a % $b;
    echo '<br>';
    echo 12 % 4;
    echo '<br>';
    echo 11 % 4; // 2*4=8 ostatak dijeljenja je 3

    echo '<br>';

    // Operator spajanja stringova
    $a = 'Algebra - ';
    $b = 'PHP';
    $c = 'Osnove';

    // Konkatenacija vise stringova
    var_dump($a.$b.$c);