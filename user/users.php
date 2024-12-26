<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Admin</title>
  </head>
  <body>
    <?php
    include "partials/_menubar.php";
    ?>
    <div class="main">
    <?php
    include "partials/_sidebar.php";
    include "partials/_dbconnect.php";
    ?>
        <div class="maincontent">
          
          <div class="mainContaintTopMargin">
            <?php 
            $vehicle=$_SESSION['vehicle'];
            $sql="Select * from user where vehicle_no='$vehicle';";
            $result=mysqli_query($conn,$sql);
            $sr=1;
            ?>
            <table class="table table-hover vehicle-table">
            <h2 class="table-heading">User List</h2>
  <thead>
  
    <tr>
      <th scope="col">#</th>
      <th scope="col">User Name</th>
      <th scope="col">Role</th>
      <th scope="col">Vehicle No</th>
      <th scope="col">License No</th>
      <th scope="col">Mobile No</th>
      <th scope="col">DOB</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row=mysqli_fetch_assoc($result)){?>
      <tr>
        <th scope="row"><?php echo $sr;?></th>
        <td><?php echo $row['user_name'];?></td>
        <td><?php echo $row['role'];?></td>
        <td><?php echo $row['vehicle_no'];?></td>
        <td><?php echo $row['license_no'];?></td>
        <td><?php echo $row['mobile_no'];?></td>
        <td><?php echo $row['date_of_birth'];?></td>
        <td>
          <?php echo'
          <form id="upForm" action="updateVehicleMode.php" method="POST">
              <input type="hidden" name="vehicle_no" value="'.$row['vehicle_no'].'">
               <i type="submit" class="fas fa-edit mr-1" style="color:blue" onclick="updateForm()"></i>
            </form>';
            ?>
        </td>
      </tr>
   <?php 
  $sr=$sr+1;} ?>
  </tbody>
</table>
          </div> 
        </div>
    </div>


    <script>
function updateForm(){
  document.getElementById("upForm").submit();
}
  </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>