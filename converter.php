<?php

function convertTemperature($temperature, $unit)
{
  if($unit == 'f') {
    // convert Fahrenheit to Celsius
    $celsius = ($temperature - 32) * 5/9;
    return $celsius;
  }
  else if($unit == 'c') {
    // convert Celsius to Fahrenheit
    $fahrenheit = ($temperature * 9/5) + 32;
    return $fahrenheit;
  }
  else {
    return "Invalid input. Please enter 'f' or 'c' as the second argument for Fahrenheit or Celsius, respectively.";
  }
}

// Example usage:
echo convertTemperature(68, 'f') . "°C"; // Output: 20°C
echo convertTemperature(20, 'c') . "°F"; // Output: 68°F
?>
