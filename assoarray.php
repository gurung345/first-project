<?php

// associative array
$cars = [
    'name'      => 'Tesla',
    'price'     => '100',
    'wheel'     =>  '4',
];

// print_r($cars);

// echo $cars['name'];
// echo "<br/>";
// echo $cars['price'];
// echo $cars['price'];

foreach($cars as $key => $car)
{
    echo $key;
    echo ": ";
    echo $car;
    echo "<br />";
}

?>