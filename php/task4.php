<?php

$num1 = 6;
$num2 = 5;
$num3 = 9;

// Using the max function to find the largest number 

if ($num1 > $num2 && $num1 > $num3) {
    echo $num1;
} elseif ($num2 > $num3) {
    echo $num2;
} else {
    echo $num3;
}


?>