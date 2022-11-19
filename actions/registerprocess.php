<?php

require dirname(__FILE__).'/../controllers/customer_controller.php';

if(isset($_POST['Register'])){

    $name=$_POST['name'];
    $email=$_POST['email']; 
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $contact=$_POST['contact'];
    $userRole= 2;
    
    
    // hash the password
    
    $result = insertCustomer_ctr($name,$email,$password,$contact,$userRole);

// $password_hashed = password_hash($password, PASSWORD_BCRYPT);


    if($result){ 
        header("location: ../view/login_form.php");
    }
    else {
        echo "insertion unsuccessful";
    }


}


?>
