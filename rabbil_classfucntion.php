
<?php
class Ostad{
    public $name="I'm learning OOP !";
    public function addTwoNumber($n1,$n2){
        echo $n1+$n2;
    }
}
$result1=new Ostad();
$result1->addTwoNumber(45,45);
echo "<br/>";
echo $result1->name;
echo "<br/>";
