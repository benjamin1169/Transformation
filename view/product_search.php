<!-- <?php
// require('../controllers/service_controller.php');
include dirname(__FILE__).'/../controllers/service_controller.php';

$service =  searchservice($_GET['search']);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap1.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">

    <script src="https://kit.fontawesome.com/75618b9696.js" crossorigin="anonymous"></script>
    
</head>
<body>


       <form method="post" action="../actions/searchprocess.php">

        <input type="text" class="form-control mb-0" id="search" name="search" placeholder="Type here to search" style="width: 400px; margin-left: 250px">
        <button style="margin-left: -50px" class="btn btn-primary float-right" type="submit" name="searchbutton">Search</button>

</form>


    </header>
<h3 style="margin-top: 50px; margin-left: 600px;">Your search results</h3>
<?php
    foreach($service as $x){
    echo
    "
    <div class='card' style='width: 18rem; display: inline-block;'>
        <div class='card-body'>
        <img style='height: 200px; width: 200px' src='{$x['service_image']}' alt='Card image cap'>
        <h5 style='color: black;' class='card-title'>{$x['service_name']}</h5>
        <h6 class='card-subtitle mb-2 text-muted'>{$x['service_price']}</h6>
        <p style='color: grey;' class='card-text'>{$x['service_desc']}</p>

        </div>
        
    </div>
    ";
    }
?>

    
</body>
</html> 