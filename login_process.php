<?php
session_start();

$email = $_POST['email']??'';
$password = $_POST['password'] ??'';

$errorMessage = '';

// if(isset($_SESSION['username'])){
//     header('Location: index.php');
// }

if ($email == 'admin@gmail.com' && $password == '12345') {
    $_SESSION['username'] = 'admin';
    header('Location: role_management.php');
} else if ($email == 'manager@gmail.com' && $password == '12345') {
    $_SESSION['username'] = 'manager';
    header('Location: dashboard_manager.php');
} else if ($email == 'user@gmail.com' && $password == '12345') {
    $_SESSION['username'] = 'user';
    header('Location: dashboard_user.php');
} else if ($email != '' || $password != '') {
    $errorMessage = 'eamil or password is blank !';
}else{
    echo 'Invalid email or password ';
}
