<?php
//Functions

// function to calculate converted temperature
function convertTemp($temp, $unit1, $unit2)
{
    // conversion formulas

    $newTemp = "";

    if ($unit1 == "celsius" && $unit2 == "fahrenheit") {
        // Celsius to Fahrenheit = T(°C) × 9/5 + 32
        $newTemp .= ($temp * (9 / 5) + 32);
        return $newTemp;
    } else if ($unit1 == "celsius" && $unit2 == "kelvin") {
        // Celsius to Kelvin = T(°C) + 273.15
        $newTemp .= ($temp + 273.15);
        return $newTemp;
    } else if ($unit1 == "fahrenheit" && $unit2 == "celsius") {
        // Fahrenheit to Celsius = (T(°F) - 32) × 5/9
        $newTemp .= (($temp - 32) * (5 / 9));
        return $newTemp;
    } else if ($unit1 == "fahrenheit" && $unit2 == "kelvin") {
        // Fahrenheit to Kelvin = (T(°F) + 459.67)× 5/9
        $newTemp .= (($temp + 459.67) * (5 / 9));
        return $newTemp;
    } else if ($unit1 == "kelvin" && $unit2 == "fahrenheit") {
        // Kelvin to Fahrenheit = T(K) × 9/5 - 459.67
        $newTemp .= ($temp * (9 / 5) - 459.67);
        return $newTemp;
    } else if ($unit1 == "kelvin" && $unit2 == "celsius") {
        // Kelvin to Celsius = T(K) - 273.15
        $newTemp .= ($temp - 273.15);
        return $newTemp;
    } else if ($unit1 == "kelvin" && $unit2 == "kelvin" || $unit1 == "celsius" && $unit2 == "celsius" || $unit1 == "fahrenheit" && $unit2 == "fahrenheit") {
        $newTemp .= $temp;
        return $newTemp;
    }
} // end function
