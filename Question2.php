<?php

function findMajorityElement($arr) {
    $count = 0;
    $candidate = null;

    // Find a candidate for the majority element
    foreach ($arr as $element) {
        if ($count == 0) {
            $candidate = $element;
            $count = 1;
        } else {
            $count += ($element == $candidate) ? 1 : -1;
        }
    }

    // Verify if the candidate is a majority element
    $count = 0;
    foreach ($arr as $element) {
        if ($element == $candidate) {
            $count++;
        }
    }

    if ($count > count($arr) / 2) {
        return $candidate;
    } else {
        return "No majority element found";
    }
}

// Example usage
$array = [2, 2, 3, 5, 2, 2, 6];
$result = findMajorityElement($array);

echo "Majority Element: " . $result . PHP_EOL;

?>
