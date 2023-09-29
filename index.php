<?php

// echo "sagar";
// $age = 19;

// if($age > 30)
// {
//     echo "adult";
// } elseif ($age == 25) 
// {
//     echo "you are 25";
// } elseif ($age == 40) {
//     echo "you are 40";
// } else {
//     echo "teenager";
// }

// nested if else

$age = 19;
// if($age > 30) {
//     if($age < 40){
//         echo "you are old";
//     } else {
//         echo "You are older";
//     }
// } else {
//     if($age <    20)
//     {
//         echo "you are teenager";
//     } else {
//         echo "you are adult";
//     }
// }

$age = 19;
if($age > 30) {
  if($age < 40){
      echo "you are old";
  } else {
        echo "You are older";
    }
} else {
       if($age < 20)
     {
         echo "you are teenager";
    } else {
        echo "you are adult";
    }
 }








?>