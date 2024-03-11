<?php

function sumAndCheckOddEven($num1, $num2) {
    // Calculate the sum of the two numbers
    $sum = $num1 + $num2;
    
    // Check if the sum is odd or even
    if ($sum % 2 == 0) {
        echo "The sum of $num1 and $num2 is $sum and it is an even number.\n";
    } else {
        echo "The sum of $num1 and $num2 is $sum and it is an odd number.\n";
    }
}

// Example usage
sumAndCheckOddEven(5, 3); // This will output: The sum of 5 and 3 is 8 and it is an even number.
sumAndCheckOddEven(10, 7); // This will output: The sum of 10 and 7 is 17 and it is an odd number.

?>
