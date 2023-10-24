<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Role Deleted Successfuly !</h1><br/><br/>
    <h5><a href="role_management.php">Back to Role Management System</h5>
   
</body>
</html>
 -->

<?php
session_start();
include 'app_manage/header.php';
?>

<body>
    <div class="container-fluid shadow indexreg text-center ">
        <h3 class="mt-5" >User Authentication and Role Management System</h3>
    </div>
<div class="container-fluid">
    <div class="row">
        <?php
            include 'app_manage/menu.php';
        ?>
 
        <div class="col-md-10 text-center bodyarea relative">
            <h1 class="wc" >Role Deleted Successfuly!<br/><br/> <a href="role_management.php"><h4>Back to Registration</h4> </a>
            </h1> 
            
        </div>
        
    </div>
</div>

<?php
include 'app_manage/footer.php';
?>
 