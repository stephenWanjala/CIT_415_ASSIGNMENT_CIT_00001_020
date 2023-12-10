<?php

function compress($chars) {
    $result = '';
    $count = 1;

    for ($i = 0; $i < count($chars); $i++) {
        // Check if the current character is the same as the next one
        if ($i < count($chars) - 1 && $chars[$i] === $chars[$i + 1]) {
            $count++;
        } else {
            // Append the compressed string based on the count
            $result .= $chars[$i] . ($count > 1 ? $count : '');
            $count = 1;
        }
    }

    return $result;
}

// Example usage
$inputArray = ["a", "a", "b", "b", "c", "c", "c"];
$output = compress($inputArray);

echo "Original Array: [" . implode(", ", $inputArray) . "]\n";
echo "Compressed String: $output";

?>
