<?php

//echo " Code Challenges questions by Faisal ";
//Create a PHP function that takes a numeric array as input and returns the average (mean) of its elements.
/*
$num=[4,8,12,20];

function average($x){
    $sum=array_sum($x);
    $count=count($x);
    $avg=$sum/$count;

    return $avg;
}

$result=average($num);
echo $result;

function calculateAverage($arr) {
    if (empty($arr)) {
        return 0; // Return 0 for an empty array to avoid division by zero.
    }
    
    $sum = array_sum($arr); // Calculate the sum of array elements.
    $count = count($arr);   // Count the number of elements in the array.
    
    $average = $sum / $count; // Calculate the average.
    
    return $average;
}

// Example usage:
$numericArray = [10, 20, 30, 40, 50,60];
$result = calculateAverage($numericArray);
echo "The average is: " . $result;



// Challence 2:  Write a PHP script that searches for a specific element in an array and returns its index if found, or a message if not found.

$myArray = [10, 20, 30, 40, 50];
$searchElement = 30;
function searchArray($array, $element) {
    $index = array_search($element, $array);
    
    if ($index !== false) {
        return "Element '$element' found at index $index";
    } else {
        return "Element '$element' not found in the array";
    }
}

$result = searchArray($myArray, $searchElement);
echo $result;

// Challenge 3: Associative Array Sort
// Build a PHP function that sorts an associative array of student names and their respective grades in descending order of grades. Output the sorted array.



function sortStudentsByGradesDescending($students) {
    // Use a custom comparison function to sort the array by values (grades) in descending order.
    uasort($students, function ($a, $b) {
        return $b - $a; // Compare grades in descending order.
    });

    return $students;
}

// Example associative array of students and their grades.
$studentGrades = [
    "Alice" => 95,
    "Bob" => 85,
    "Charlie" => 92,
    "David" => 78,
    "Eve" => 88,
];

// Sort the array by grades in descending order.
$sortedStudents = sortStudentsByGradesDescending($studentGrades);

// Output the sorted array.
foreach ($sortedStudents as $student => $grade) {
    echo "$student: $grade\n";
}


// Challenge 4: Shopping Cart
// Create a PHP shopping cart using an array to store products (associative arrays with name and price). Implement functionality to add, remove, and display items in the cart.

$fruits = array("apple", "banana", "cherry","Papiya");
array_push($fruits, "date", "elderberry");
$additems= print_r($fruits);
echo "Two items are added $additems". "\n" ;

$removeitems=array_pop($fruits);
echo "Remove Items $removeitems". "\n" ;

print_r($fruits);

// Initialize an empty shopping cart as an array.
$cart = [];

// Function to add a product to the cart.
function addToCart(&$cart, $productName, $productPrice) {
    $cart[$productName] = $productPrice;
    echo "$productName has been added to the cart.\n";
}

// Function to remove a product from the cart.
function removeFromCart(&$cart, $productName) {
    if (isset($cart[$productName])) {
        unset($cart[$productName]);
        echo "$productName has been removed from the cart.\n";
    } else {
        echo "$productName is not in the cart.\n";
    }
}

// Function to display items in the cart.
function displayCart($cart) {
    if (empty($cart)) {
        echo "The cart is empty.\n";
    } else {
        echo "Items in the cart:\n";
        foreach ($cart as $productName => $productPrice) {
            echo "$productName - $productPrice\n";
        }
    }
}

// Example usage:
addToCart($cart, "Product A", 10.99);
addToCart($cart, "Product B", 5.49);
addToCart($cart, "Product C", 8.75);

displayCart($cart);

removeFromCart($cart, "Product B");

displayCart($cart);


// Challenge 5: Matrix Multiplication
// Write a PHP script that performs matrix multiplication for two given multidimensional arrays and outputs the result.


function matrixMultiplication($matrixA, $matrixB) {
    $rowsA = count($matrixA);
    $colsA = count($matrixA[0]);
    $colsB = count($matrixB[0]);

    if ($colsA != count($matrixB)) {
        echo "Matrix multiplication is not possible. The number of columns in Matrix A must be equal to the number of rows in Matrix B.";
        return null;
    }

    $result = array();

    for ($i = 0; $i < $rowsA; $i++) {
        $resultRow = array();
        for ($j = 0; $j < $colsB; $j++) {
            $sum = 0;
            for ($k = 0; $k < $colsA; $k++) {
                $sum += $matrixA[$i][$k] * $matrixB[$k][$j];
            }
            $resultRow[] = $sum;
        }
        $result[] = $resultRow;
    }

    return $result;
}

// Example matrices for multiplication.
$matrixA = array(
    array(2, 3),
    array(4, 5)
);

$matrixB = array(
    array(1, 2),
    array(3, 4)
);

$resultMatrix = matrixMultiplication($matrixA, $matrixB);

if ($resultMatrix !== null) {
    echo "Result of Matrix Multiplication:\n";
    foreach ($resultMatrix as $row) {
        echo implode(' ', $row) . "\n";
    }
}

// Challenge 6: Palindrome Checker
// Build a PHP function that checks whether a given string is a palindrome (reads the same backward as forward) and returns true or false.

function isPalindrome($str) {
    // Remove spaces and convert to lowercase for case-insensitive comparison.
    $str = strtolower(str_replace(' ', '', $str));
    
    // Reverse the string.
    $reversedStr = strrev($str);
    
    // Compare the original and reversed strings.
    return $str === $reversedStr;
}

// Test cases
$string1 = "racecar";
$string2 = "hello";
$string3 = "A man a plan a canal Panama";

echo isPalindrome($string1) ? "$string1 is a palindrome.\n" : "$string1 is not a palindrome.\n";
echo isPalindrome($string2) ? "$string2 is a palindrome.\n" : "$string2 is not a palindrome.\n";
echo isPalindrome($string3) ? "$string3 is a palindrome.\n" : "$string3 is not a palindrome.\n";


// Challenge 7: Unique Values
// Create a PHP function that takes an array of numbers and returns a new array containing only the unique values (removing duplicates).

$inputArray = [1, 2, 2, 3, 4, 4, 5,6,8,8,3,6,7,7];
 function uniqueValues($arr) {
    // Use array_unique to remove duplicates and re-index the array.
    $uniqueArr = array_unique($arr);
    
    // Optionally, re-index the array with numeric keys.
    return array_values($uniqueArr);
}

// Example usage:

$uniqueArray = uniqueValues($inputArray);

sort($uniqueArray);
// Output the unique values.
print_r($uniqueArray);


// Challenge 8: Merge Arrays
// Write a PHP function that takes two numeric arrays as input and merges them into a single array, removing any duplicates.


$num1=[2,3,3,4,5,6];
$num2=[12,13,13,14,15,16,12,12,12,12,12,12];
$mergeToNum=array_merge($num1,$num2);
$getUnique=array_unique($mergeToNum);
print_r($mergeToNum). "\n" ;
print_r($getUnique) ;


// Challenge 9: Word Frequency Counter
// Develop a PHP script that takes a paragraph of text and generates an associative array where keys are unique words, and values are the frequency of each word in the text.


    function freqWord($text){
        $text=strtolower(preg_replace('/[^\p{L}\p{N}\s]/u', '', $text));
        $words=str_word_count($text,1);
        $wordFrequency=array_count_values($words);
        return $wordFrequency;
    }
$para=" It is a long established fact that a reader will be distracted by the readable content of a page when looking at its at atar ar layout. .";

$result=freqWord($para);

print_r($result). "\n";

// Challenge 10: Tic-Tac-Toe Game
// Create a PHP implementation of the Tic-Tac-Toe game. Use a multidimensional array to represent the game board and implement the game logic, including checking for a win or a draw.

 */


// Initialize the Tic-Tac-Toe board as a 3x3 multidimensional array.
$board = [
    [' a', 'b ', ' c'],
    [' x', 'y ', ' x'],
    [' 1', '2 ', ' 3'],
    [' ক', 'খ ', ' গ'],
];

// Variable to keep track of the current player (X or O).
$currentPlayer = 'X';

// Function to display the Tic-Tac-Toe board.
function displayBoard($board) {
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo $board[$i][$j];
            if ($j <=2) {
                echo ' | ';
            }
        }
        echo PHP_EOL;
        if ($i < 2) {
            echo "=========\n";
        }
    }
    echo PHP_EOL;
}

// Function to check if the current player has won.
function checkWin($board, $player) {
    // Check rows, columns, and diagonals for a win.
    for ($i = 0; $i < 3; $i++) {
        if (
            $board[$i][0] === $player && $board[$i][1] === $player && $board[$i][2] === $player ||
            $board[0][$i] === $player && $board[1][$i] === $player && $board[2][$i] === $player
        ) {
            return true;
        }
    }
    if (
        $board[0][0] === $player && $board[1][1] === $player && $board[2][2] === $player ||
        $board[0][2] === $player && $board[1][1] === $player && $board[2][0] === $player
    ) {
        return true;
    }
    return false;
}

// Function to check if the game is a draw.
function checkDraw($board) {
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            if ($board[$i][$j] === ' ') {
                return false;
            }
        }
    }
    return true;
}

// Main game loop.
while (true) {
    displayBoard($board);
    
    // Get the current player's move.
    echo "Player $currentPlayer's turn. Enter row (0-2) and column (0-2) separated by a space: ";
    list($row, $col) = explode(' ', readline());
    
    // Check if the move is valid.
    if ($row >= 0 && $row < 3 && $col >= 0 && $col < 3 && $board[$row][$col] === ' ') {
        $board[$row][$col] = $currentPlayer;
        
        // Check if the current player has won.
        if (checkWin($board, $currentPlayer)) {
            displayBoard($board);
            echo "Player $currentPlayer wins!\n";
            break;
        }
        
        // Check if the game is a draw.
        if (checkDraw($board)) {
            displayBoard($board);
            echo "It's a draw!\n";
            break;
        }
        
        // Switch to the other player.
        $currentPlayer = ($currentPlayer === 'X') ? 'O' : 'X';
    } else {
        echo "Invalid move. Try again.\n";
    }
}
