<?php

include "../classes/booking_class.php";


//APPOINTMENT MANAGMENT

//add appoinmtnet
function insert_booking_ctr($customer_id,$service_name,$cat_name, $app_date, $app_time){
  $newbook = new Booking();
  return $newbook->insert_booking_class($customer_id,$service_name,$cat_name, $app_date, $app_time);
}

//display booking
function display_booking($customer_id){
  $select = new Booking();
  return $select->display_booking($customer_id);
}

//update booking
function update_booking($app_id, $customer_id,$service_name,$cat_name, $app_date, $app_time){
  $updatebook = new Booking();
  return $updatebook->update_booking($app_id, $customer_id,$service_name,$cat_name, $app_date, $app_time);
}

//delete booking 
function delete_booking_ctr($app_id){
  $delete = new Booking();
  return $delete->delete_booking_class($app_id);
}

?>