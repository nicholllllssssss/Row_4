<?php

function calculateHypotenuse($a, $b) {
    $hypotenuse = sqrt(pow($a, 2) + pow($b, 2));
    return $hypotenuse;
}

// Example usage
$sideA = 3;
$sideB = 4;
$hypotenuse = calculateHypotenuse($sideA, $sideB);
echo "The hypotenuse of a right triangle with sides $sideA and $sideB is $hypotenuse.\n";

?>
