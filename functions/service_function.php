<?php
    require('../controllers/service_controller.php');

function get_all_categories_function()
{
	//call the controller
	$allcategories = getCAT();
	//display the records
	if ($allcategories)
    {
		//loop through the recrods one at a time
		foreach ($allcategories as $key => $value) 
        {
			$catid = $value['cat_id'];
			$catname = $value['cat_name'];

			echo '<option value ="'.$catid.'">'.$catname.'</option>';
		}

    }
}
// function get_all_brands_function(){
// 	//call the controller
// 	$allbrands = getbrand();
// 	//display the records
// 	if ($allbrands){
// 		//loop through the recrods one at a time
// 		foreach ($allbrands as $key => $brand){
// 			$brandid = $brand['brand_id'];
// 			$brandname = $brand['brand_name'];

// 			echo '<option value ="'.$brandid.'">'.$brandname.'</option>';
// 		}

// }
// }
  
?>
