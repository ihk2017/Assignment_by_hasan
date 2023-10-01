<?php

class Human{
    public $name;
    function sayHi(){
        echo "Good Morning ! How are you? <br/>";
        $this->sayName();
    }
    function sayName(){
        echo "Your Name is {$this->name}  <br/>";
    }
}
class Cat{
    function sayHi(){
        echo "Meow .<br/>";
    }
}
class Dog{
    function sayHi(){
        echo "Woof <br/>";
    }
}
$h1=new Human();
$h1->sayHi();
$h1->name="I am here. <br/>";//set operation
$h1->sayName();
echo $h1->name; //get opration
$c1=new Cat();
$c1->sayHi();
$d1=new Dog();
$d1->sayHi();

$h2=new Human();
$h2->name="calling h2";
$h2->sayHi();