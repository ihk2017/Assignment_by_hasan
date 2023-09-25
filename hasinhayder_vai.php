<?php
// $firstName="Imam";
// $lastName="Kazioooooooooooooooooooo";
// $age=77;
// $city="Dhaka";
// $maritalStatus="Married". "\n";
// echo "First Name: $firstName \nLast Name: $lastName \nDesignation: Developer \nAge: $age \nLive in: $city \nMarital Status : $maritalStatus";

// $aboutME= <<<EOD
// First Name      :{$firstName}
// Last Name       :{$lastName}
// Designation     :Developer
// Age             :{$age}
// Live in         :{$city}
// Marital Status  :{$maritalStatus}
// EOD;
// echo $aboutME;


// $fullName=$firstName." ". $lastName;
// echo "Full Name :". $fullName;
// $longText = <<<ABCD
// First Name: {$firstName}
// Last Name: {$lastName}
// Designation: Developer
// ABCD;

//$string = "Hello World";
//echo $string[6]; ///Find the character position
//echo substr($string,3,5); //position 3 to 5
//echo substr($string,-2);//last two charcter

// $fruits = ["apple", "banana", "orange"];
// echo $fruits[1];

// 
// echo substr($string,0,1); //H
// echo substr($string,0,5); //Hello
// echo substr($string,2);

// $string="Yellow dogs are on the wall";

// $lenght = strlen($string);
// for($i=0;$i<$length;$i++){
//     echo $string[$i];
// }

// $getlength= strlen($string);

// for($i=0; $i<$getlength; $i++){
//     echo $string[$i];
// }


// $string = "Yellow dogs are on the wall";
// $searchword= 'dogs2';
// $getposition=strpos($string,$searchword);
// if($getposition !==false){
//     echo "$searchword is exist here !";
// }else{
//     echo "$searchword is Not exist here !";
// }

// $string = "PHP & Framework Course From Ostad";
// $search = "Framework";
// $replace = "44353453453";

// $newString = str_replace("Framework","oieroiore",$string);
// echo $newString;


// $string2 = "Language and Framework from Ostad";
// $search2 = ["Language","Framework"];
// $replace2 = ["PHP","Laravel"];
// $newString2 = str_replace($search2,$replace2,$string2);

$strings="Yellow dogs are on the wall ";
// $searchwords=["dogs","wall"];
// $replacewords=["foxes","roof"];
// $result= str_replace($searchwords,$replacewords,$strings);
// echo $result;

// $relace=strtr($strings,[
//     "Yellow" =>"Brown",
//     "dogs" =>"foxes",
//     "are" =>"were",
//     "wall" =>"roof"
// ]);

// echo $relace;

//$character = "*#@";

//repeat for 10 times

//echo str_repeat($character,10);

// for($i=0;$i<=10;$i++){
//     echo str_repeat($character,$i). "<br/>";
// }

// $string = "PHP & Laravel Course From Ostad";

// $parts = explode(" ",$string); //delimiter = seperator
//  print_r($parts);
// echo count($parts);

// $stringParts = ["PHP","&","Laravel","Course","From","Ostad"]; 
// // $newString = implode(" ",$stringParts);
// //print_r($stringParts) . "\n";
// $newString = join(" ",$stringParts);
// echo $newString;

$dummyText = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore obcaecati eum dignissimos error laudantium quis excepturi nemo temporibus ullam natus aliquam incidunt quam quidem necessitatibus illum at eveniet repudiandae corrupti distinctio officiis mollitia ut, doloribus neque? Aperiam assumenda odit, deserunt omnis pariatur, nam, vel perspiciatis ab expedita possimus quam tenetur atque dolor doloremque aspernatur officia et ipsa. Magnam, maxime doloribus. Tenetur aspernatur tempora at et facere ducimus soluta facilis, non sit temporibus explicabo vel quibusdam nisi dolore omnis. Voluptatum asperiores debitis quasi quo sapiente voluptas quaerat ullam tenetur, dolore possimus officia est fuga blanditiis eius maiores sunt molestiae ipsum nihil!";
// $stringParts = str_split($dummyText, 30);
// for($i=0;$i<count($stringParts);$i++){
//     echo $stringParts[$i]."\n";
// }

// $stringParts = wordwrap($dummyText, 30, "\n");
// echo $stringParts;

$string = "Imam";
$shuffled = str_shuffle($string);

$encodedString = base64_encode($string);

$decode=base64_decode($encodedString);
echo $encodedString. "\n";
echo $decode;
