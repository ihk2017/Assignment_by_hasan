<?php
// Introduction to arrays

// $n="12";
// $students= array("Rahim","Karim","Jasim","Rina","Bina",900);
// $n=count($students);
// //Ascending 
// for($i=0;$i<$n; $i++){
//     echo $i. " . ". $students[$i]. "\n";
// }

// //Descending 

// for ($i=$n-1;$i>=0; $i--){
//     echo $i. " . ". $students[$i]. "\n";
// }

//Array Manipulation


// $fruits_list = array(0 => 'Orange', 1=> 'Apple', 2 => 'Banana',3 => 'Cherry');
// $result= array_shift($fruits_list);
// print_r($fruits_list);
// echo '</br>'.$result;


// $foods=[
//     'drinks'=>'water,mink,oil',
//     'fruits'=>'apple,mango,cocout',
//     'vegetible'=>'puisak,mula,chichinga'
// ];
// //echo $foods['drinks'];

// foreach($foods as $key=>$value){
//     echo $key.' : '.$value. "\n";
// }

//$srtings="Hello  world, How are nuy.uyy can join with us you";
// $seprate=explode(".", $srtings);
// // echo $srtings. "\n";
// print_r($seprate) . "\n";
// $original=join(" ",$seprate);
// $original1=implode(" ",$seprate);
// print_r($original);
// echo PHP_EOL;
// print_r($original1);echo PHP_EOL;

// $splits=str_split($srtings);
// print_r($splits);echo PHP_EOL;

// $atrtoks=strtok($srtings,",");
// while($atrtoks !==false){
//     echo $atrtoks. "\n";
//     $atrtoks=strtok(" ,");
// }


// $result1=preg_split("/ |,/",$srtings);
// print_r($result1);

//$result1=strpos($srtings,"y0ou");
//$result1=strrpos($srtings,"you");
//$result1=stripos($srtings,"You");
// if($result1 !==false){
//     echo "\nYou exist here !\n";    
// }else{
//     echo "You not exist here !";    
// }
//print_r($result1);

// $string="Hellow dear,dear are you fine";
// $replace=str_replace(array('fine','are'),array('good','is'),$string,$count);
// echo $replace. "\n";
// echo "{$count}";

// $string=" Hellow dear, dear ,are you fine //\n ,";
// echo $string. "\n";
// $result=trim($string,',');
// echo $result;
// $lorem="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

// $result=wordwrap($lorem,30);
// echo $result;

// $lorem="Lorem Ipsum is /simply \dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's";

// $retext = preg_replace('/\s+/', ' ', $lorem);
// echo $retext;

// $name="Hasna KAzi4444444444,099999999";
// $result= sscanf($name," %s %s %9s");
// print_r($result) ;

//Use the correct array method to sort the $age array according to the values.


// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// asort($age);

// foreach($age as $x => $x_value) {
//   echo "Key=" . $x . ", Value=" . $x_value. "\n";
// }


//$fruits = ['apple'=>'green', 'banana'=>'yellow', 'cherry'=>'radish'];
// $fruits[] = 'orange'; // Adds 'orange' to the end of the array
// $fruits[] = 'banana';
// array_push($fruits, 'guava','grape'); // Adds 'grape' to the end of the array
//unset($fruits['cherry']); // Removes the element at index 1 ('banana')
//array_shift($fruits);
//$fruits = ['apple', 'banana', 'cherry'];
//$fruits[5] = 'kiwi'; // Modifies 'banana' to 'kiwi'

//print_r($fruits) ;

/// $numbers = [10, 20, 30, 40, 50];

// Displaying array elements using a loop
// foreach ($numbers as $number) {
//     echo $number . " ";
// }
// Output: 10 20 30 40 50


// $num= [1,2,3,4,5,66,55,44,33];

// foreach($num as $numbers){
//     echo $numbers. "\n";
// }

//  $products = [
//      ['ProductID' => 1, 'Name' => 'Laptop', 'Price' => 800],
//      ['ProductID' => 2, 'Name' => 'Smartphone', 'Price' => 400],
//      ['ProductID' => 3, 'Name' => 'Tablet', 'Price' => 300]
//  ];

//  echo $products[1]['Name'] ;// Output: Smartphone

//$colors = ['red', 'green', 'blue'];

// Removing the first element ('red')
//array_pop($colors);
//$res=array_slice($colors,2,2);

// $fruits1 = ['apple', 'banana'];
// $fruits2 = ['cherry', 'orange'];

// $res= array_merge($fruits1,$fruits2);
//  print_r($res);


$ages = [
       'Alice' => 25,
       'Bob' => 30,
        'Charlie' => 20
    ];
    krsort($ages);
print_r($ages);