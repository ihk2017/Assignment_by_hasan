<?php
$array = [3, 8, 1, 12, 5,88, 9];
function getMaxVal($x){
    $max=$x[0];
    foreach($x as $value){
        if($value> $max){
            $max=$value;
        }
    }
    return $max;
}
$result =getMaxVal($array);
echo $result;

