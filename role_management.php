
<?php
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
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 roleman ">
                        <h2>Role Management Page!</h2>
                        <hr>
                        <form method="post" action="role_create_process.php">
                            <label>Create New Role:</label>
                            <input type="text" name="new_role" required>
                            <input type="submit" value="Create">
                        </form>
                    
                        <?php 
                            $data = file_get_contents("./role_create.txt");
                            echo nl2br($data);
                        ?> 
                        <hr>
                        <form method="post" action="role_edit_process.php">
                            <label>Edit Role:</label>
         
                            <input type="text" name="edited_role" required>
                            <input type="submit" value="Edit">
                        </form>
                        <?php 
                            $data = file_get_contents("./role_edit.txt");
                            echo nl2br($data);
                        ?>
                        <hr>
                        <form method="post" action="role_delete_process.php">
        
                            <input type="submit" value="Delete">
                            <?php 
                            $data = file_get_contents("./role_create.txt");
                            echo nl2br($data);
                        ?>
                        </form>
                        <div class="nev mt-3 mb-2 bg-light">
                            <a href="registration.php">New User!</a>
                            <a href="index.php">Home!</a>
                        </div>
                      
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include 'app_manage/footer.php';
?>