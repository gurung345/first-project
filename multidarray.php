<?php

// multidimensional array
$cars = [
    [        
        'name'      =>  'Tesla',
        'price'     =>  '100',
        'color'     =>  'red',
    ],
    [        
        'name'      =>  'Lemo',
        'price'     =>  '200',
        'color'     =>  'blue',
    ],
    [        
        'name'      =>  'Audo',
        'price'     =>  '300',
        'color'     =>  'purple',
    ]
];

foreach($cars as $key => $car){

    $name = $car['name'];
    $carPrice = $car['price'];
    $carColor = $car['color'];

    echo $name;
    echo $carPrice;
    echo $carColor;
    echo "<br />"; 

    // echo "Name: ";
    // echo $car['name'];
    // echo "<br />";

    // echo "Price: ";
    // echo $car['price'];
    // echo "<br />";

    // echo "Color: ";
    // echo $car['color'];
    // echo "<br />";
    // echo "<br />";
}

// echo $cars['name'];
// echo "<br />";

?>