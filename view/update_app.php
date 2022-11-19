<?php
session_start();
include ('../controllers/service_controller.php');
$data = getCAT(); 
$services = getservices();  

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
</body>
</html>
<html>

<head>
		
	<style>				
		body {
			text-align: center;
		}
	</style>
</head>

<body>

	<h2 style="color:green">TRANSFORMATION SALON</h1>
	
	<b> BOOK AN APPOINTMENT
	</b>
	
	<br>
	<body class="container">
	<form action="../actions/book.php" method="POST">
                <label for="CATEGORIES">Choose a category:</label>
            <select name="service_cat" id="cat_name">
            <option value=""> </option>
            <?php
            foreach($data as $key => $value) {
                echo '<option value="' .$value["cat_id"] . '">'. $value["cat_name"] .'</option>'; 
            }
?>

</select>
            <br><br>
            <label for="SERVICE">Choose a Service:</label>
            <select name="service_name" id="services">
            <option value=""> </option>
        
            <?php
            foreach($services as $key => $value) {
                echo '<option value="' .$value["service_id"] . '">'. $value["service_name"] .'</option>'; 
            }

            ?>  
			</select>
	
	<h4>TIME:
	<input type="hidden" value="<?php echo $_SESSION["user_id"]?>" name="customer_id">
	<input type="datetime-local" name="app_date" id="Test_DatetimeLocal">
    <input class="form-control mr-sm-2" type="hidden" value="<?php echo $_POST["ip"]?>" name="ip">
    <input class="form-control mr-sm-2" type="hidden" value="<?php echo $_POST["customer_id"]?>" name="customer_id">
    <input class="form-control mr-sm-2" type="hidden" name="app_id" value ="<?php echo $_POST["app_id"]?>">
	<button class="btn" type="submit" name="update_book">UPDATE APPOINTMENT</button>
	</h4>
	</form>
	
</body>

</html>