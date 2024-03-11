<?php

function convertTemperature($celsius) {
    // Convert Celsius to Fahrenheit
    $fahrenheit = ($celsius * 9/5) + 32;
    
    // Convert Celsius to Kelvin
    $kelvin = $celsius + 273.15;
    
    // Display the converted temperatures
    echo "The temperature in Celsius: " . $celsius . "°C\n";
    echo "The temperature in Fahrenheit: " . $fahrenheit . "°F\n";
    echo "The temperature in Kelvin: " . $kelvin . "K\n";
}

// Example usage:
convertTemperature(25); // Replace 25 with the Celsius value you want to convert

?>
