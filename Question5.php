<?php

function stutterWord($word) {
    // Take the first two letters of the word
    $prefix = substr($word, 0, 2);

    // Create the stuttered version of the word
    $stutteredWord = "$prefix...$prefix...$word";

    return $stutteredWord;
}

// Example usage
$originalWord = "incredible";
$stutteredWord = stutterWord($originalWord);

echo "Original Word: $originalWord\n";
echo "Stuttered Word: $stutteredWord";

?>
