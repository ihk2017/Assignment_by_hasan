<?php
// $numbers = array(3, 1, 4, 1, 5);
// $res= sort($numbers);
// echo $res;

$input = fscanf(STDIN, "%f");

// Check if the input is valid
if ($input === false || count($input) !== 1) {
    echo "Invalid input. Please enter a valid number.\n";
    exit(1);
}

// Extract the Celsius value from the input array
$celsius = $input[0];

// Convert Celsius to Fahrenheit
$fahrenheit = ($celsius * 9/5) + 32;

// Display the result
echo "{$celsius} Celsius is equal to {$fahrenheit} Fahrenheit\n";