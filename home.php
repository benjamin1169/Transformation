<?php 

if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION['user_role'])) 
    $log = '<a style="font-size: 1.5rem;" href="settings/core.php?logout=true">Logout</a>';
else
    $log = '<a style="font-size: 1.5rem;" href="view/login_form.php">Login</a>';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My E-Commerce Website</title>
</head>

<body>
        <div
            style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 90vh; max-height: 90vh;">
            <h1 style="font-size: 5rem;">Hello 
            <?php 
            if(isset($_SESSION['user_name'])){ 
                echo $_SESSION['user_name']; 
            } 
            else {
                echo 'user'; 
            }
            ?>, Welcome to our Online Store!</h1>
            <?php echo $log; ?>
            <a style="font-size: 1.5rem;" href="view/registerform.php">Signup</a>
            <?php if(isset($_SESSION['user_role']) && $_SESSION['user_role'] == 1) { ?>
                <a style="font-size: 1.5rem;" href="./admin/category.php">Add or Edit Categories</a>
                <a style="font-size: 1.5rem;" href="./admin/service.php">Add or Edit Services</a>
                <?php } ?>
            
        </div>        
</body>
</html>