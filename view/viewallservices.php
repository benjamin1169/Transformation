<?php

// require('../controllers/service_controller.php');
// return array of all rows, or false (if it failed)
include dirname(__FILE__).'/../controllers/service_controller.php';
$service = getservices();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS
    <link rel="stylesheet" href="../CSS/bootstrap1.css">
    <!- Style CSS -->
    <link rel="stylesheet" href="../CSS/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../CSS/responsive.css">

    <script src="https://kit.fontawesome.com/75618b9696.js" crossorigin="anonymous"></script>
    
</head>
<body style=' margin-bottom: 20px'>

<header style="display: flex; margin-top: 10px; color: black;">
    <a href="../mini_index.php"><h3 style="color:#dc3545;">Home</h3></a>
    <div>
    <form method="post" action="../actions/searchprocess.php" style='display: flex'>

        <input type="text" class="form-control mb-0" id="search" name="search" placeholder="Type here to search" style="width: 400px; margin-left: 250px">
        <button style="margin-left: -50px" class="btn btn-primary float-right" type="submit" name="searchbutton">Search</button>

    </form>
    </div>

    <a href="../admin/brand.php"><h3 style="color:black; margin-left: 200px;">Brand</h3></a>
    <a href="../admin/category.php"><h3 style="color:black; margin-left: 40px;">Category</p></h3>
    <a href="../view/productadded.php"><h3 style="color:black; margin-left: 40px;">Add Product</p></h3>
    <a href="../admin/productaddandedit.php"><h3 style="color:black; margin-left: 40px;">Edit Product</p></h3>
    <a href="../view/viewcart.php"><h3 style="color: black; margin-left:40px;">Cart</h3></a>
    
    
</header>

<h1 style='margin-top: 60px; margin-left: 600px; color: #6f42c1'>Product List</h1>
<?php
    foreach($service as $x){
        echo 
        "
        
        <a href='./viewoneproduct.php?id={$x['product_id']}'>
        <div class='card' style='width: 18rem; display: inline-block; margin-bottom: 20px;'>
            <div class='card-body'>
            <img style='height: 200px; width: 200px' src='{$x['service_image']}' alt='Card image cap'>
            <h5 style='color: black;' class='card-title'>{$x['service_name']}</h5>
            <h6 class='card-subtitle mb-2 text-muted'>{$x['service_price']}</h6>
            <p style='color: grey;' class='card-text'>{$x['service_desc']}</p>
         
            </div>
            
        </div>
        </a>
       
    ";
    }
?>
            <!-- <br> -->

<!--  -->

</body>
</html>
