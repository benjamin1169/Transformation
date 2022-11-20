<?php

session_start();

$service_id = $_SESSION['id']; 

include dirname(__FILE__).'/../controllers/service_controller.php';
// check if button is clicked
if(isset($_POST["update_service"])){
    // grab form data
    $service_cat = $_POST["service_cat"];
    $service_name = $_POST["service_name"];
    $service_price = $_POST["service_price"];
    $service_desc = $_POST["service_desc"];
    $service_keywords = $_POST["service_keywords"];
    //$service_id = $_POST["service_id"];

    $imgfolder = ".\\..\\images\\service\\";

    $upload_imgfolder = "./../images/service/";

    $service_image = $_FILES["service_image"];

    $file_dest = $imgfolder . basename($service_image["name"]);

    $upload_file_dest = $upload_imgfolder . basename($service_image["name"]);

    $file_type = strtolower(pathinfo($file_dest, PATHINFO_EXTENSION));

move_uploaded_file($service_image["tmp_name"], $file_dest);



//db insertion

    $result = updateservice($service_id, $service_cat,
    $service_name,$service_price,$service_desc,$upload_file_dest,$service_keywords);
    if ($result) {
        session_start();
        $_SESSION["service_upt"] = true;
        header("location: ../admin/service_display.php");
    } else {
        echo "Insertion failed";
    }
}

?>