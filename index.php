<?php 


require_once('config/db.php');
$query = "select * from none";
$result = mysqli_query($con,$query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css"/>
  <title>Retrieve Data From Database</title>
</head>
<body class="bg-dark">
    <div class="container">
      <div class="row mt-5">
        <div class="col">
          <div class="card mt-5">
            <div class="card-header">
              <h2 class="display-6 text-center">Retrieve Data From Database</h2>
            </div>
            <div class="card-body">
              <table class="table table-bordered text-center">
                <tr class="bg-dark text-white">
                  <td> First Name </td>
                  <td> Last Name </td>
                  <td> Email </td>
                  <td> Phone </td>
                  <td> Edit </td>
                  <td> Delete </td>
                </tr>
                <tr>

                <?php 

                  while($row = mysqli_fetch_assoc($result))
                  {
                ?>
                  
                  <td><?php echo $row['firstName']; ?></td>
                  <td><?php echo $row['lastName']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['phone']; ?></td>
                  <td><a href="#" class="btn btn-primary">Edit</a></td>  
                  <td><a href="#" class="btn btn-danger">Delete</a></td>  
                </tr>
                <?php    
                  }
                
                ?>
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>