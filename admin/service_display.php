<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
</head>
<body>

    <nav class="navbar navbar-light bg-light justify-content-between"></nav>

    

<h2> SERVICES </h2><br>
<div class="container">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Services</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>
    <?php
      include ("../controllers/service_controller.php");
      $data = getservices();
      foreach($data as $key => $value) {
          echo '<tr>
                  <td>
                      '. $value["service_title"] .'        
                  </td>
                  <td>
                    <a href="edit_service.php?id='. $value["service_id"] .'">Edit</a>
                  </td>
              </tr>';
      }
    ?>  
  </tbody>
</table>
</div>
</body>
</html>
