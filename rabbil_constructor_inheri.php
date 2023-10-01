
<?php

/*
class Father{
    public function print100(){
        for ($i=1;$i<=100; $i++){
            echo $i;
            echo "<br/>";
        }
    }
}
class Son extends Father{
     public function print100(){
        for ($i=1;$i<=20; $i++){
            echo $i;
            echo "<br/>";
        }
    }
}

$object=new Son();
$object->print100();



// Using Final: if use final key word , this class/function cann't be inheritated by other class/function
final class Father{
    final public function print100(){
        for ($i=1;$i<=100; $i++){
            echo $i;
            echo "<br/>";
        }
    }
}
class Son extends Father{
     public function print100(){
        for ($i=1;$i<=20; $i++){
            echo $i;
            echo "<br/>";
        }
    }
}

$object=new Son();
$object->print100();


}

//if use abstract key words, it means this class is useless. this class already lost it power. Only inheritated class is all in all
abstract class Father{
    public function print100(){
        for ($i=1;$i<=100; $i++){
            echo $i;
            echo "<br/>";
        }
    }
}
class Son extends Father{
    function print100(){
        for ($i=1;$i<=20; $i++){
            echo $i;
            echo "<br/>";
        }
    }
}

$object=new Son();
$object->print100();

$object=new Father();
$object->print100();

*/

//Multiple constractor....................

// class Father{
//     public function __construct(){
//         echo "Father constractor";
//     }
// }
    
// class Son extends Father {
//     public function __construct(){
//         echo "Son constractor";
//     }
// }

// new Son();
//.........................................
// class Father{
//     public function hello(){
//         echo "Hello from Father !";
//     }
// }

// class Son extends Father{

//     public function demo(){
//         parent::hello();

//     }
// }

// $obj=new Son();
// $obj->demo();
//Static///////////////////////////////////////////////////

// class Myclass{
//     public static $value= "Static Value ";
//     public static function showValue(){
//         echo self::$value;
//     }
// }
// MyClass::showValue();


// class Myclass{

//     public static function showValue(){
//         echo "I am a developer";
//     }
// }
// MyClass::showValue();
// $obj=new MyClass();
// $obj->showValue();

//