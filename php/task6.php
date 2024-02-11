<?php

// Array
$array = [1, 2, 3, 4, 5];

// Search 3
$searchNum = 9;

$found = false;

// Loop
foreach ($array as $value) {
    if ($value == $searchNum) {
        $found = true;
        break;
    }
}

// Result print
if ($found) {
    echo "Found.";
} else {
    echo "Not found.";
}
?>