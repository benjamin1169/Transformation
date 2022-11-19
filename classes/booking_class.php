<?php
//connect to database class
require("../settings/db_class.php");


class Booking extends db_connection{


//functions for apppointment/booking

    function insert_booking_class($customer_id, $service_name, $cat_name, $app_date, $app_time){
        $sql= "INSERT INTO `appointment`(`customer_id`, `service_name`, `cat_name`, `app_date`, `app_time`) 
        VALUES ('$customer_id', '$service_name', '$cat_name', '$app_date', '$app_time')";
        return $this->query($sql);
    }

    function display_booking($customer_id){
        $sql = "SELECT appointment.*, categories.cat_name AS category, services.service_name AS service, 
        services.service_price FROM `appointment` JOIN categories JOIN services WHERE appointment.customer_id = '$customer_id' 
        AND services.service_id = appointment.service_name AND appointment.cat_name = categories.cat_id;";
        return $this->fetch($sql);
    }


    //function to update a booking when a user clicks on update apppintment
    function update_booking($app_id,$customer_id,$service_name,$cat_name, $app_date, $app_time){
        $sql = "UPDATE `appointment` SET `service_name`='$service_name',`cat_name`='$cat_name',
        `app_date`='$app_date', app_time = '$app_time' WHERE `app_id`='$app_id' AND `customer_id`='$customer_id'";
        return $this->query($sql);
    }
    
    //function to delete a bookin
    function delete_booking_class($app_id){
    $sql = "DELETE FROM `appointment` WHERE `app_id`='$app_id'";
    return $this->query($sql);
    }
}



?>