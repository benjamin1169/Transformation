<?php 

session_start();
 
if (isset($_SESSION['email'])){
    
?>

// Logged in 
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="../Login/logout.php">logout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="brand.php">Catgeory</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="category.php">Category</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addproductform.php">Products</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="./cart.php">Cart</a>
      </li>
 
   
     
    </ul>
  </div>
<?php
    }else{}
        //Not logged in
    ?>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="../Login/logout.php">logout</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="../Login/register.php">Register</a>
        <li class="nav-item"> -->
        <a class="nav-link" href="viewall_products.php">All Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./cart.php">Cart</a>
      </li>
      <!-- </li>
      <li class="nav-item">
        <a class="nav-link" href="">All Products</a>
      </li> -->
    
      
       
    </ul>
 
  </div> 
