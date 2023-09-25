<?php
/*
Task 2: Array Manipulation


Create an array called $numbers containing the numbers 1 to 10. Write a PHP function which takes the "$numbers" array as an argument to remove the even numbers from the array and print the resulting array.

*/



function removeEvenNumbers($numbers) {
    $result = array();

    foreach ($numbers as $number) {
        if ($number % 2 != 0) {
            $result[] = $number;
        }
    }

    return $result;
}

$numbers = range(1, 10);

$getOddNumbers = removeEvenNumbers($numbers);

print_r($getOddNumbers);


