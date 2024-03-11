<?php

function convertKelvinToCelsiusAndFahrenheit($kelvin) {
    // Convert Kelvin to Celsius
    $celsius = $kelvin - 273.15;
    
    // Convert Celsius to Fahrenheit
    $fahrenheit = ($celsius * 9/5) + 32;
    
    // Display the results
    echo "Temperature in Kelvin: " . $kelvin . "K\n";
    echo "Temperature in Celsius: " . number_format($celsius, 2) . "°C\n";
    echo "Temperature in Fahrenheit: " . number_format($fahrenheit, 2) . "°F\n";
}

// Example usage:
convertKelvinToCelsiusAndFahrenheit(300); // Replace 300 with the Kelvin value you want to convert.

?>
