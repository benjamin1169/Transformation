<?php
include ('../controllers/service_controller.php');
$data = getCAT(); 

$service_id = $_GET['id'];  

session_start();

$_SESSION['id'] = $service_id; 

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="container">
    <form method="POST" action="../actions/edit_service.php" enctype="multipart/form-data">
                <label for="CATEGORIES">Choose a service category:</label>
            <select name="service_cat" id="cat_name">
            <option value=""> </option>
            <?php
            foreach($data as $key => $value) {
                echo '<option value="' .$value["cat_id"] . '">'. $value["cat_name"] .'</option>'; 
            }


            ?>  
            </select>    
<br>  <br><br>
        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3cg">Enter service name</label>
            <input type="text" id="form3Example3cg" class="form-control form-control-lg" name="service_name"  required />
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3cg">Enter service price</label>
            <input type="number" id="form3Example3cg" class="form-control form-control-lg" name="service_price" required />
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3cg">Enter service description</label>
            <input type="text" id="form3Example3cg" class="form-control form-control-lg" name="service_desc" required />
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3cg">Upload service image</label>
            <input type="file" id="form3Example3cg" class="form-control form-control-lg" name="service_image" />
            
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3cg">Enter service keyword</label>
            <input type="text" id="form3Example3cg" class="form-control form-control-lg" name="service_keywords" required />
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" name="update_service" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Edit service</button>
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>


