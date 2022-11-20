<?php

include dirname(__FILE__).'/../controllers/service_controller.php';
// check if button is clicked
if(isset($_POST["service"])){
    // grab form data
    $service_cat = $_POST["service_cat"];
    $service_title = $_POST["service_title"];
    $service_price = $_POST["service_price"];
    $service_desc = $_POST["service_desc"];
    $service_keywords = $_POST["service_keywords"];

    

    $imgfolder = ".\\..\\images\\service\\";

    $upload_imgfolder = "../images/service/";

    $service_image = $_FILES["service_image"];

    $file_dest = $imgfolder . basename($service_image["name"]);

    $upload_file_dest = $upload_imgfolder . basename($service_image["name"]);

    $file_type = strtolower(pathinfo($file_dest, PATHINFO_EXTENSION));

    move_uploaded_file($service_image["tmp_name"], $file_dest);




//db insertion
    $result = insertservice($service_cat,$service_title,$service_price,$service_desc,$upload_file_dest,$service_keywords);
    if ($result) {
        echo "Inserted succesfully";
        session_start();
       $_SESSION["service_rst"] = true;
        header("location: ../view/navigation.php");
    } else {
        echo "Insertion failed";
    }
}

?>

