<?php

include '../controllers/service_controller.php';
// check if button is clicked
if(isset($_GET["delete_id"])){
    // grab form data
    $service_id = $_GET["delete_id"];
   

    $result = deleteservice($service_id);
    //echo $result;

    if ($result) {
        header("location: ../admin/service_display.php");
    } else {
        echo "Unable to Delete";
    }
}



?>