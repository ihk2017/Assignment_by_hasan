<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $editrole = $_POST["edited_role"];
    

    // Saving process of user data to a file s
    $roleData = " $editrole\n";
    file_put_contents("role_edit.txt", $roleData);

    $_SESSION["username"] = $username; // Set the session
    header("Location: role_management.php");
} else {
    echo "Invalid request!";
}

