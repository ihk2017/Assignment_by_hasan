<?php

$name = "Alice";
$age = 25;
$country = "Wonderland";

$result = compact('name', 'age', 'country');
print_r($result);