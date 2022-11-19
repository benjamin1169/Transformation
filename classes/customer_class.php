<?php
//connect to database class
require("../settings/db_class.php");


class CustomerClass extends db_connection{

    function insertCustomer_cls($name,$email,$password,$contact,$userRole){
       
        $sqltwo= "INSERT INTO `customer`(`customer_name`, `customer_email`, `customer_pass`, `customer_contact`, `user_role`) 
        VALUES ('$name','$email','$password','$contact','$userRole')";
        return $this->query($sqltwo);

    }

    function returnCustomer_cls($email){
            $sqltwo= "SELECT * FROM `customer` WHERE `customer_email` = '$email'";
            return $this->fetchOne($sqltwo);
    
        }
    //functions for apppointment/booking

    function insert_booking_class($customer_id, $service_id,$app_date,$app_status){
        $sql= "INSERT INTO `appointment`( `customer_id`, `service_id`, `app_date`, `app-status`) 
        VALUES ('$customer_id','$app_date','$app_status'";
        return $this->query($sql);
    }

    function display_booking($app_id){
        $sql = "SELECT  `customer_id`, `service_id`, `app_date`, `app-status` FROM `appointment` WHERE `app_id`='$app_id";
        return $this->query($sql);
    }


//function to update a booking when a user clicks on cancel apppintment
function update_booking($app_id,$customer_id,$service_id,$app_date,$app_status){
    $sql = "UPDATE `appointment` SET `customer_id`='$customer_id',
    `service_id`='$service_id',`app_date`='$app_date',`app-status`='$app_status' WHERE `app_id`='$app_id'";
    return $this->query($sql);
}
//function to delete a bookin
function delete_booking_class($app_id){
    $sql = "DELETE FROM `appointment` WHERE `app_id`='$app_id";
    return $this->query($sql);
}

}


?>