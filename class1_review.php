<?php
//How to create Array

//$array1=array('Rahim','Karim',"Jasim","Rina","Bina");

//Array For loop
// for($i=0; $i< count($array1); $i++){
//     echo "$i ." . $array1[$i]. "<br/>";
// }

//Array Foreach loop

// foreach($array1 as $result){
//     echo$result. "<br/>" ;
// }


//Associative Array

// $person=["firstname" => "Hasan", "age" => 40, "city" => "Dhaka"];
// // print_r($person);

// foreach($person as $key=> $persons){
//     echo "$key : $persons <br/>";
// }

//Multidimentional Array

//  $mulArray=[
//     ["firstname" => "Hasan", "age" => 40, "city" => "Dhaka"],
//     ["firstname" => "Karim", "age" => 240, "city" => "Khul"],
//     ["firstname" => "janu", "age" => 12, "city" => "Raj"],
//     ["firstname" => "Hena", "age" => 50, "city" => "stiant"]
//  ];
//  echo $mulArray[0]['firstname']. " : ".$mulArray[0]['age']. " : ".$mulArray[0]['city'];
/*
$mulArray=[
    ["firstname" => "Hasan", "age" => 40, "city" => "Dhaka"],
    ["firstname" => "Karim", "age" => 240, "city" => "Khul"],
    ["firstname" => "janu", "age" => 12, "city" => "Raj"],
    ["firstname" => "Hena", "age" => 50, "city" => "stiant"]
 ];

 foreach($mulArray as $result){
    foreach($result as $key=>$value){
        echo $key. ":".$value. "<br/><br/>" ;
    }
 }
 

 $users = [
    "john" =>["age" => 25,"email" => "john@example.com"],
    "jane" => ["age" => 30,"email" => "jane@example.com"]];
echo $users["john"]["age"];

:::::::array_values
 $a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
print_r(array_values($a));

$onlyvalues=["Name" => "John","age" => 45,"Country"=>"Peru"];
//$result=array_values($onlyvalues);
$result=array_keys($onlyvalues);
print_r($result);

$x = array("a", "b", "c",'d');
$y = array("apple", "banana", "cherry","nery");
$combined = array_combine($x, $y);

print_r($combined);

# array_fill() - Fills an array with values.
$filled = array_fill(0, 22, "apple");
print_r($filled);

$country=['Bangladesh',"India"];
array_push($country,"Canada","USA" );
print_r($country);

$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);

$fruits = array("apple", "banana", "cherry");
array_pop($fruits);
print_r($fruits);

$animals=['cow','goat',"pigeon"];
array_unshift($animals,'dove');
print_r($animals);

$animals=['cow','goat',"pigeon"];
array_shift($animals);
print_r($animals);

#array_slice() - Extracts a portion of the array.
$fruits = array("apple", "kola","dala","banana", "cherry","cherry2");
$portion = array_slice($fruits,3,5);
print_r($portion);

#array_splice() - Removes a portion of the array and replaces it with something else.

$fruits=["Lichi",'Amm',"jam","kola"];
array_splice($fruits,2,3,["bery,chery"] );
print_r($fruits);

$fruits = ["apple", "banana", "cherry", "date"];
array_splice($fruits, 1, 2); // Removes "banana" and "cherry"
print_r($fruits);

$fruits = ["apple", "banana", "cherry"];
$newFruits = ["orange", "grape"];
array_splice($fruits, 2, 0, $newFruits); // Inserts "orange" and "grape" after "cherry"
print_r($fruits);




$arr=["dkjfkdjf",'ewreiwuriew','jhfebbdsnbfd'];
// echo count($arr);
echo sizeof($arr);

$arrsum=[4,5,6,8];
echo array_sum($arrsum);

$arrmul=[4,5,6];
echo array_product($arrmul);

$num = [2,4,55,6,6,7];

$existnum=in_array(77,$num);
if($existnum ==1 ){
    echo " Yoour input exist in the system";
}else{
    echo " Yoour input does not exist in the system";
}

$num = "[2,4,55,6,6,7]";
$result=is_array($num);

if($result==1){
    echo " This is an array";
}else{
    echo " This is not an array";
}

$persons=["Name"=>"hasan","age"=>"33","city"=>"Dhaka"];
$check=array_key_exists("citys",$persons);

echo $check;
if($check ==0){
    echo "wow";
}else{
    echo "sad";
}


#array_search() - Searches the array for a given value and returns the first corresponding key.
$assoc = array("first" => "apple", "second" => "banana");
$key = array_search("apple", $assoc);
echo $key;

$ser=["name"=>"dkdkfdk","age"=>343,"sts"=>"ppppppppppp"];
$result=array_search('ppppppppppp',$ser);
echo $result;

$infos=[
    ['name'=>"hasan","age"=>188,'city'=>"sylhet"],
    ['name'=>"hasaner","age"=>288,'city'=>"Khili"],
    ['name'=>"Rhasan","age"=>388,'city'=>"Peru"],
    ['name'=>"GDasan","age"=>488,'city'=>"Geru"]
];

$result=array_column($infos,'name');
print_r($result);

$infos=['name'=>"hasan","age"=>188,'city'=>"sylhet"];


$result=array_flip($infos);
print_r($infos);
echo "<br/>.";
print_r($result);

$reparray=['amm','jam','kola'];
$newval=[0=>'mango',1=>'bery',2=>'banana'];
$result= array_replace($reparray,$newval);
print_r($result);
echo "<br/>.";
print_r($reparray);

$reparray1=['amm','jam','kola'];
$reparray2=['amm2','jam3','kola4'];

$merge=array_merge($reparray1,$reparray2);
print_r($merge);

// $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// function isEven($number) {
//     return $number % 2 === 0;
// }
// $evenNumbers = array_filter($numbers, 'isEven');

// // Print the even numbers
// print_r($evenNumbers);

$num=[1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function evenNumbers($num){
    if($num%2==0){
        echo $num. 'is an even number. '. "<br/>";
    }
}
$result=array_filter($num,'evenNumbers');
print_r($result);

#array_map() - Applies a callback function to the elements of one or more arrays.
function square($n) {
    return $n * $n;
}
$numbers = array(1, 2, 3, 4);
$squaredNumbers = array_map('square', $numbers);
print_r($squaredNumbers);

for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 === 0) {
    continue; // Skip multiples of 5
    }
    echo $i . " ";
    }*/
    
    
    function greet($name) {
        echo "Hello, $name!". " Nice to meet you.";
    }

    $name = "Alice";
    greet($name);