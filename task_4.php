<?php
/*
Task 4: Multidimensional Array


Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.


*/

function averageGrades($studentGrades) {
    $result = array();

    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $count = count($grades);
        $average = $total / $count;
        $result[$student] = $average;
    }

    return $result;
}

$studentGrades = array(
    "Student 1" => array("Math" => 75, "English" => 88, "Science" => 98),
    "Student 2" => array("Math" => 88, "English" => 95, "Science" => 90),
    "Student 3" => array("Math" => 75, "English" => 70, "Science" => 68)
);

$averageGrades = averageGrades($studentGrades);

foreach ($averageGrades as $student => $average) {
    echo "$student: Average Grade of 3 subjects is = $average\n";
}
