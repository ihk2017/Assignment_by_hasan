<?php
session_start();

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $editrole = $_POST["edited_role"];
    

//     // Saving process of user data to a file s
//     $roleData = " $editrole\n";
//     file_put_contents("role_edit.txt", $roleData);

//     $_SESSION["username"] = $username; // Set the session
//     header("Location: role_management.php");
// } else {
//     echo "Invalid request!";
// }



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the data to edit and the new data from the form input
    $dataToEdit = $_POST["dataToEdit"];
    $newData = $_POST["newData"];
    
    // Read the contents of the .txt file into an array
    $file = "role_create.txt";
    $lines = file($file);

    // Open the file for writing
    $fileHandle = fopen($file, 'w');

    // Loop through each line in the file
    foreach ($lines as $line) {
        // Check if the line matches the data to edit
        if (trim($line) == $dataToEdit) {
            // If it matches, replace it with the new data
            fwrite($fileHandle, $newData . "\n");
        } else {
            // If it doesn't match, write it back to the file
            fwrite($fileHandle, $line);
        }
    }

    // Close the file
    fclose($fileHandle);
    header('Location: role_edited_confirm.php');

    //echo "Data edited successfully.";
}
