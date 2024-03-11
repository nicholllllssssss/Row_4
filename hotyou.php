<?php

function convertFahrenheitToCelsiusAndKelvin($fahrenheit) {
    // Convert Fahrenheit to Celsius
    $celsius = ($fahrenheit - 32) * 5/9;
    
    // Convert Celsius to Kelvin
    $kelvin = $celsius + 273.15;
    
    // Display the results
    echo "Temperature in Fahrenheit: " . $fahrenheit . "°F\n";
    echo "Temperature in Celsius: " . $celsius . "°C\n";
    echo "Temperature in Kelvin: " . $kelvin . "K\n";
}

// Example usage:
convertFahrenheitToCelsiusAndKelvin(68); // Replace 68 with the Fahrenheit value you want to convert.

?>
