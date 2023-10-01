<?php
// class Rectangle {
//     private $length;
//     private $width;

//     public function __construct($length, $width) {
//         $this->length = $length;
//         $this->width = $width;
//     }

//     public function getArea() {
//         return $this->length * $this->width;
//     }

//     public function getPerimeter() {
//         return 2 * ($this->length + $this->width);
//     }
// }

// $rectangle = new Rectangle(12, 9);
// echo "Area: " . $rectangle->getArea() . "</br>";
// echo "Perimeter: " . $rectangle->getPerimeter() . "</br>";


// class Rectangle {
//     private $length;
//     private $width;

//     public function __construct($length, $width) {
//         $this->length = $length;
//         $this->width = $width;
//     }

//     public function getLength() {
//         return $this->length;
//     }

//     public function setLength($length) {
//         $this->length = $length;
//     }

//     public function getWidth() {
//         return $this->width;
//     }

//     public function setWidth($width) {
//         $this->width = $width;
//     }

//     public function calculateArea() {
//         return $this->length * $this->width;
//     }

//     public function calculatePerimeter() {
//         return 2 * ($this->length + $this->width);
//     }
// }
// // Create a rectangle
// $rectangle = new Rectangle(15, 30);

// // Get the length and width of the rectangle
// $length = $rectangle->getLength();
// $width = $rectangle->getWidth();

// // Calculate the area and perimeter
// $area = $rectangle->calculateArea();
// $perimeter = $rectangle->calculatePerimeter();

// // Output the results
// echo "Rectangle Length: $length<br>";
// echo "Rectangle Width: $width<br>";
// echo "Rectangle Area: $area<br>";
// echo "Rectangle Perimeter: $perimeter<br>";



// class Circle {
//     private $radius;

//     public function __construct($radius) {
//         $this->radius = $radius;
//     }

//     public function getRadius() {
//         return $this->radius;
//     }

//     public function setRadius($radius) {
//         $this->radius = $radius;
//     }

//     public function calculateArea() {
//         return pi() * pow($this->radius, 2);
//     }

//     public function calculateCircumference() {
//         return 2 * pi() * $this->radius;
//     }
// }
// // Create a circle
// $circle = new Circle(5);

// // Get the radius of the circle
// $radius = $circle->getRadius();

// // Calculate the area and circumference
// $area = $circle->calculateArea();
// $circumference = $circle->calculateCircumference();

// // Output the results
// echo "Circle Radius: $radius<br>";
// echo "Circle Area: $area<br>";
// echo "Circle Circumference: $circumference<br>";


//5         //Write a PHP class called 'Vehicle' with properties like 'brand', 'model', and 'year'. Implement a method to display the vehicle details.

// class Vehicle{
//     private $brand;
//     private $model;
//     private $year;

//     public function __construct($brandVal,$modelVal,$yearVal){
//         $this->brand    =   $brandVal;
//         $this->model    =   $modelVal;
//         $this->year     =   $yearVal;

//     }

//     public function displayVehicleDetails(){
//         echo "Brand name is : {$this->brand} \n";
//         echo "Model is : {$this->model} \n";
//         echo "Year of : {$this->year} \n";
//     }
// }

// $result=new Vehicle("Premio","G-host",2018);
// $result->displayVehicleDetails();


// 7. Write a PHP class called 'Student' with properties like 'name', 'age', and 'grade'. Implement a method to display student information.

// class Student{
//     public $name;
//     public $age;
//     public $grade;

//     public function __construct($nameVal,$ageVal,$gradeVal){
//         $this->name =   $nameVal;
//         $this->age  =   $ageVal;
//         $this->grade=   $gradeVal;

//     }
//     public function studentInformation(){
//         echo "Student's name is {$this->name} \n";
//         echo "He is {$this->age} years old \n";
//         echo "He got {$this->grade} of his exam \n";
//     }
// }

// $result=new Student("Md. Kabir Mahmud",22,"A+");
// $result->studentInformation();


