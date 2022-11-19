<?php
// Start session
session_start();

// Check if the person not logged in
if (!isset($_SESSION['user_role']) && $_SESSION['user_role'] != 1) {
    header('location: ../index.php');
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <form method="POST" action="../actions/add_category.php">
        <div class="form-outline mb-4">
            <input type="text" id="form3Example3cg" class="form-control form-control-lg" name="catname" required />
            <label class="form-label" for="form3Example3cg">Enter Category name</label>
        </div>


        <div class="d-flex justify-content-center">
            <button type="submit" name="cat" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Add Category</button>
        </div>

    </form>
    <br>
    <h2> CATEGORIES </h2>

  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Categories</th>
        <th scope="col">Edit Category</th>
      </tr>
      <?php
    
       include '../controllers/service_controller.php';
        $data = getCAT();
        foreach($data as $key => $value) {
            echo '<tr>
                    <td>
                        '. $value["cat_name"] .'        
                    </td>
                    <td>
                        <form action="../actions/edit_category.php" method="POST">
                            <input type="text" name="newcat" required>
                            <input type="hidden" name="cat_id" value="'. $value['cat_id'] .'" required>
                            <input type="submit" name="update_cat">
                        </form>
                    </td>
                </tr>';
        }
      ?>
    </thead>
    <tbody>

   
    </tbody>
  </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>