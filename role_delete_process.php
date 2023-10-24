<?php

// Open the file for writing and truncate its content
$file = fopen('role_create.txt', 'w');
ftruncate($file, 0);
fclose($file);

// Check if the file was truncated
if (filesize('role_create.txt') === 0) {
  //echo "File truncated successfully.";
  header("Location: role_delete_confirm.php");
  
} else {
  echo "Failed to truncate file.";
}

?>

