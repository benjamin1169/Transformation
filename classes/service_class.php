<?php

require '../settings/db_class.php';

class AddCAT extends db_connection{
    //CATEGORIES METHODS
    //add, edit, delete category
    //add category
    function addcat($cat){
       // take a query
       $catquery= "INSERT INTO `categories`(`cat_name`) VALUES ('$cat')";
       // execute query
       return $this->query($catquery);
    }

//display category
    function selectcat(){
		$sql="SELECT * FROM `categories` ";
        return $this->fetch($sql);
        
	}
//update category
    //--UPDATE--//
	function updatecat($id, $cat){
        $sql = "UPDATE `categories` SET `cat_name`='$cat' WHERE `cat_id`='$id'";
		//exceute sql
		return $this->query($sql);

	}

  
//SERVICE METHODS
function addservice($service_cat,$service_name,$service_price,$service_desc,$service_image,$service_keywords){
    // take a query
    $servicequery= "INSERT INTO `services`(`service_cat`, 
    `service_name`, `service_price`, `service_desc`, `service_image`, `service_keywords`) 
    VALUES ('$service_cat','$service_name','$service_price','$service_desc','$service_image','$service_keywords')";
    // execute query
    return $this->query($servicequery);
 }


 function selectservices(){
     $sql=" SELECT * FROM `services` ";
    return $this->fetch($sql);
  
 }

 function selectservice($id){
    $sql=" SELECT * FROM `services` WHERE `service_id`='$id'";
   return $this->fetchOne($sql);

}

 //--UPDATE--//
 function updateservice($service_id, $service_cat,$service_name,$service_price,$service_desc,$service_image,$service_keywords){
     $sql = "UPDATE `services` SET `service_cat`='$service_cat',`service_name`='$service_name',`service_price`='$service_price',
     `service_desc`='$service_desc',`service_image`='$service_image',`service_keywords`='$service_keywords' WHERE `service_id`= '$service_id'";
     //exceute sql
     return $this->query($sql);

 }
 //service SEARCH
 function searchservice($searchdata){
 $sql = "SELECT * FROM `services` WHERE `service_name` LIKE '%$searchdata%' ";
 return $this->fetch($sql);
 }

// APPOINTMENT
//add,edit,delete
//add appointment
function addbooking($customer_id,$service_id,$app_date){
    $sql="INSERT INTO `appointment`( `customer_id`, `service_id`, `app_date`) VALUES ('$customer_id','$service_id','$app_date'";
    return $this->query($sql);
}

//display
function selectbooking(){
    $sql ="SELECT * FROM `appointment`";
    return $this->fetch($sql);

}

//edit appointment
function updatebooking($app_id,$customer_id,$service_id,$app_date){
    $sql = "UPDATE `appointment` SET `customer_id`='$customer_id',`service_id`='$service_id',`app_date`='$app_date'; 
    WHERE `app_id`='$app_id'";
    return $this->query($sql);
}

//delete appointment
function cancelbooking($app_id,$customer_id,$service_id,$app_date){
    $sql ="DELETE FROM `appointment` WHERE `app_id` ='$app_id'";
     return $this->query($sql);
}


}
?>

