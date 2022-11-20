<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Appetizer - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Miss+Fajardose&display=swap" rel="stylesheet">
	

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">


	
  </head>
  <body>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href=>Admin</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">logout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../admin/category.php">Category</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../admin/service.php">Add Service</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="../view/viewallservices.php">All Services</a>
      </li>  

    
     
    </ul>
  </div>

  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  
  <div
  style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 90vh; max-height: 90vh;">
            <h1 style="font-size: 5rem;">Hello <?php if(isset($_SESSION['user_name'])){ echo $_SESSION['user_name']; } else {echo 'Admin'; }?>, Welcome to our Online Store!</h1>
  </div>
  <?php

session_start();



if (isset($_SESSION['email'])){
    if($_SESSION['user_role'] == 1){
    //if user is admin
    ?>

<!-- <div class="py-1 bg-black top">
   	<div class="container">
   		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 1235 2355 98</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
 						    <span class="text">transformationsalon@gmail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
						    <p class="mb-0 register-link"><span>Open hours:</span> <span>Monday - Sunday</span> <span>8:00AM - 9:00PM</span></p>
 					    </div>
				    </div>
			    </div>
 		    </div>
 		  </div>
    </div>
 	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
      <a class="navbar-brand" href="index.php">Salon</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
 	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="../index.php" class="nav-link">Home</a></li>
 	        	<li class="nav-item active"><a href="../view/about.php" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="../view/service.php" class="nav-link">Services</a></li>
	        	<li class="nav-item"><a href="../view/blog.php" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="../view/contact.php" class="nav-link">Contact</a></li>
		  <li class="nav-item"><a href="../view/donate.php" class="nav-link">Donate</a></li>
			  <li class="nav-item"><a href="../view/login.php" class="nav-link">Login</a></li> -->

			  



  <?php
	}else{
		//if the user is customer 
		header("location: ./view/userlandingpage.php");
		

	}
}
?>

	

 

  </body>
  </html>
