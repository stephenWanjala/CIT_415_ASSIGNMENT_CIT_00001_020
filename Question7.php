<?php

function pizzaVolume($radius, $height) {
    // Calculate the volume using the formula: π * radius^2 * height
    $volume = M_PI * $radius**2 * $height;

    // Round the result to the nearest integer (rounding up for .5 as decimal part)
    $roundedVolume = round($volume);

    return $roundedVolume;
}

// Example usage
$radius = 10;
$height = 5;
$result = pizzaVolume($radius, $height);

echo "The volume of the pizza is: $result cubic units";

?>
