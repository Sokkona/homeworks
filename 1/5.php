<?php

$bmw = array (
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => "2015" 
);

$toyota = array (
    'model' => 'Camry',
    'speed' => 130,
    'doors' => 5,
    'year' => "2013" 
);

$opel = array (
    'model' => 'vectra',
    'speed' => 110,
    'doors' => 3,
    'year' => "2009" 
);

$car = array (
    'bmw' => $bmw,
    'toyota' => $toyota,
    'opel' => $opel
);

echo 'CAR bmw', PHP_EOL;
echo "$bmw[model]  $bmw[speed]  $bmw[doors]  $bmw[year]", PHP_EOL;

echo 'CAR toyota', PHP_EOL;
echo "$toyota[model]  $toyota[speed]  $toyota[doors]  $toyota[year]", PHP_EOL;

echo 'CAR opel', PHP_EOL;
echo "$opel[model]  $opel[speed]  $opel[doors]  $opel[year]", PHP_EOL;

