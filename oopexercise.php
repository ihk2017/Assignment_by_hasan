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


//11  Write a class called 'Employee' that extends the 'Person' class and adds properties like 'salary' and 'position'. Implement methods to display employee details.

// class Person{
//     public $name; public $serviceat;public $empID;public $age;public $city;
   
//     public function __construct($nameVal,$serviceatVal,$empIDval,$ageVal,$cityVal){
//         $this->name         = $nameVal;
//         $this->serviceat    = $serviceatVal;
//         $this->empID        = $empIDval;
//         $this->age          = $ageVal;
//         $this->city         = $cityVal;

//     }
//     public function __toString(){
//         return "Employee Name is {$this->name} .\nHe is working at {$this->serviceat}.\n His employee ID is {$this->empID}.\n He is {$this->age} years old.\n Heis living in { $this->city}";
//     }

// }

// class Employee extends Person{
//     public $salary; public $position;

//     public function __construct($nameVal,$serviceatVal,$empIDval,$ageVal,$cityVal,$salVal,$positionVal){
//         parent::__construct($nameVal,$serviceatVal,$empIDval,$ageVal,$cityVal);
//         $this->salary = $salVal;
//         $this->position = $positionVal;
//     }

//     public function getSalary(){
//         return $this->salary;
//     }
//     public function getPosition(){
//         return $this->position;
//     }

//     public function displayinfor(){
//         echo "Name is {$this->name}.\n Working at {$this->serviceat}.\n He is {$this->age} years old.\n Living in {$this->city}.\n His present salary is {$this->salary}.\n His current position is {$this->position}\n";
//     }
// }

// $result=new Employee("Sunjhuyen","Standard Group",4554,45,"Gazipur",5000,"General Manger");
// $result->displayinfor();



// interface Comparable {
//     public function compareTo($other);
// }

// class Product implements Comparable {
//     private $name;
//     private $price;

//     public function __construct($name, $price) {
//         $this->name = $name;
//         $this->price = $price;
//     }

//     public function getName() {
//         return $this->name;
//     }

//     public function getPrice() {
//         return $this->price;
//     }

//     public function compareTo($other) {
//         if ($other instanceof Product) {
//             if ($this->price < $other->getPrice()) {
//                 return -1;
//             } elseif ($this->price > $other->getPrice()) {
//                 return 1;
//             } else {
//                 return 0;
//             }
//         } else {
//             throw new Exception("Invalid comparison object.");
//         }
//     }
// }

// $product1 = new Product("Desktop", 1200);
// $product2 = new Product("Laptop", 1000);
// $product1->getPrice();

// $result = $product1->compareTo($product2);

// if ($result < 0) {
//     echo $product1->getName() . " is cheaper than " . $product2->getName() . "</br>";
// } elseif ($result > 0) {
//     echo $product1->getName() . " is more expensive than " . $product2->getName() . "</br>";
// } else {
//     echo $product1->getName() . " and " . $product2->getName() . " have the same price.</br>";
// }




// class Logger {
//     public static $logCount = 0;

//     public static function log($message) {
//         echo $message . "\n";
//         self::$logCount++;
//     }
// }
// Logger::log("Log message 1");
// Logger::log("Log message 2");
// Logger::log("Log message 3");
// Logger::log("Log message 1");
// Logger::log("Log message 2");
// Logger::log("Log message 3");

// echo "Total log count: " . Logger::$logCount . "</br>";


//14 Write a class called 'Math' with static methods like 'add()', 'subtract()', and 'multiply()'. Use these methods to perform mathematical calculations.

// class Math{

//     public static function addNumbers($n1,$n2){
//         return $n1+$n2;
//     }
//     public static function subsNumbers($n1,$n2){
//         return $n1-$n2;
//     }

//     public static function multNumbers($n1,$n2){
//         return $n1*$n2;
//     }

//     public static function divNumbers($n1,$n2){
//         return $n1/$n2;
//     }
// }
// $addResult=Math::addNumbers(3,3);
// echo "Result of adding is equal : {$addResult} <br/>" ;
// $subsResult=Math::subsNumbers(34,3);
// echo "Result of substraction is  : {$subsResult} <br/>" ;
// $multResult=Math::multNumbers(34,3);
// echo "Result of Multipilication is  : {$multResult} <br/>" ;
// $divtResult=Math::divNumbers(34,3);
// echo "Result of Dividation is  : {$divtResult} <br/>" ;

//15 Write a PHP class called 'Calculator' that has a private property called 'result'. Implement methods to perform basic arithmetic operations like addition and subtraction.

// class Calculator {
//     private $result;

//     public function __construct() {
//         $this->result = 0;
//     }

//     public function getResult() {
//         return $this->result;
//     }

//     public function add($number) {
//         $this->result += $number;
//     }

//     public function subtract($number) {
//         $this->result -= $number;
//     }
// }

// $calculator = new Calculator();

// $calculator->add(4);
// $calculator->add(5);
// $calculator->subtract(3);

// $result = $calculator->getResult();
// echo "Result: " . $result;

// class Calculator {
//     private $result;

//     public function __construct() {
//         $this->result = 0;
//     }

//     public function getResult() {
//         return $this->result;
//     }

//     public function add($num) {
//         $this->result += $num;
//     }

//     public function subtract($num) {
//         $this->result -= $num;
//     }
// }

// // Usage example:
// $calculator = new Calculator();
// $calculator->add(5);
// $calculator->subtract(3);

// echo "Result: " . $calculator->getResult(); // Output: Result: 2


// class ShoppingCart {
//     private $items = array();
//     private $total = 0;

//     // Add an item to the cart
//     public function addItem($product, $quantity, $price) {
//         if (isset($this->items[$product])) {
//             // If the item already exists in the cart, update the quantity
//             $this->items[$product]['quantity'] += $quantity;
//         } else {
//             // If it's a new item, add it to the cart
//             $this->items[$product] = array(
//                 'quantity' => $quantity,
//                 'price' => $price
//             );
//         }
//         // Recalculate the total cost
//         $this->calculateTotal();
//     }

//     // Calculate the total cost of items in the cart
//     private function calculateTotal() {
//         $this->total = 0;
//         foreach ($this->items as $item) {
//             $this->total += $item['quantity'] * $item['price'];
//         }
//     }

//     // Get the total cost
//     public function getTotal() {
//         return $this->total;
//     }

//     // Get the items in the cart
//     public function getItems() {
//         return $this->items;
//     }
// }

// // Usage example
// $cart = new ShoppingCart();

// $cart->addItem('Product A', 2, 10.99);
// $cart->addItem('Product B', 1, 5.99);

// $itemsInCart = $cart->getItems();
// $totalCost = $cart->getTotal();

// foreach ($itemsInCart as $product => $item) {
//     echo "Product: $product, Quantity: {$item['quantity']}, Price: {$item['price']}$<br>";
// }

// echo "Total Cost: $totalCost";

// class ShoppingCart {
//     private $items;
//     private $total;

//     public function __construct() {
//         $this->items = [];
//         $this->total = 0;
//     }

//     public function addItem($item, $price) {
//         $this->items[$item] = $price;
//         $this->total += $price;
//     }

//     public function getTotal() {
//         return $this->total;
//     }
// }

// $cart = new ShoppingCart();

// $cart->addItem("Product 1", 20);
// $cart->addItem("Product 2", 30);
// $cart->addItem("Product 3", 10);

// $total = $cart->getTotal();
// echo "Total cost: $" . $total;

// class Validation {
//     public static function validateEmail($email) {
//         // Check if the email is valid using a regular expression
//         return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
//     }

//     public static function validatePassword($password) {
//         // Here's an example that checks if the password is at least 8 characters long
//         return strlen($password) >= 8;
//     }

//     public static function validateField($field) {
//         // Here's an example that checks if the field is not empty
//         return !empty($field);
//     }
// }

// $email = "admin@example.com";
// $password = "password123";
// $field = "";

// if (Validation::validateEmail($email)) {
//     echo "Email is valid.</br>";
// } else {
//     echo "Email is invalid.</br>";
// }

// if (Validation::validatePassword($password)) {
//     echo "Password is valid.</br>";
// } else {
//     echo "Password is invalid.v";
// }

// if (Validation::validateField($field)) {
//     echo "Field is valid.</br>";
// } else {
//     echo "Field is invalid.</br>";
// }

// $name="A";
// $roll=120;

// if($name=="A" && $roll==12){
//     echo "Matched";
// }else{
//     echo "Not matched";
// }

class Fruits{
    public $faname;
    public $color;

    public function mango(){
        echo " I love";
    }
}
$getResult=new Fruits('Fazli');
$getResult->mango();
