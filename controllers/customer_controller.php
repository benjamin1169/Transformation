<?php

require("../classes/customer_class.php");

function insertCustomer_ctr($name,$email,$password,$contact,$userRole){
  $add_customer= new CustomerClass();
  return $add_customer->insertCustomer_cls($name,$email,$password,$contact,$userRole);
}
/*
function returnCustomer_ctr($email){
  $return_customer= new CustomerClass();
  $view =  $return_customer->returnCustomer_cls($email);
  $cus_array = array();
  
  if($view){
    $temp_hold = $return_customer -> fetchOne($view);
    $cus_array[] = $temp_hold;
  
  }
  return $cus_array;

}*/

function returnCustomer_ctr($email){
  $add_customer= new CustomerClass();
  return $add_customer->returnCustomer_cls($email);
}

?>