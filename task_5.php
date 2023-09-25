<?php

/*
Task 5: Password Generator

Create a PHP function called generatePassword($length) that generates a random password of the specified length. The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+). Write a PHP program to generate a password with a length of 12 characters using this function and print the password.

*/


function generatePassword($length) {
 
    $lowercaseLetters = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseLetteers = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    $combinedLetters = $lowercaseLetters . $uppercaseLetteers . $numbers . $specialChars;

    $password = '';
 
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, strlen($combinedLetters) - 1);
        $password .= $combinedLetters[$randomIndex];
    }
    
    return $password;
}

$length = 12;
$password = generatePassword($length);

echo "Generated Password is : $password\n";

