<?php
$DELETE = "Admin";

$data = file("role_create.txt");

$out = array();

foreach($data as $line) {
    if(trim($line) != $DELETE) {
        $out[] = $line;
    }
}

$fp = fopen("role_create.txt", "w+");
flock($fp, LOCK_EX);
foreach($out as $line) {
    fwrite($fp, $line);
}
flock($fp, LOCK_UN);
fclose($fp);  
echo "role delete page";
?>
