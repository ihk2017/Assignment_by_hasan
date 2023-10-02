<?php

/*
Constructor
1.Method that gets executed whenever an object is instantiated from a class
2.The constructor method has a magic name: __construct.
*/

class Car {

    public function __construct() {
        $num1=10;
        $num2=20;
        echo $num1+$num2. "\n";
    }
}

$myCar = new Car();

class Calculate{
    public function __construct(){
        $n1=10;
        $n2=20;
        echo $n1+$n2;
    }
}
$result=new Car();
