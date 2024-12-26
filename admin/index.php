<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
    <link rel="stylesheet" href="../user/style.css">
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
        $sql = "Select * from vehicle;";
        $result = mysqli_query($conn, $sql);
        $sr = 1;
        ?>
        <table class="table table-hover vehicle-table" id="vehicle_table">
          <h2 class="table-heading">Vehicles List</h2>
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Vehicle No</th>
              <th scope="col">Tracker ID</th>
              <th scope="col">Registration Date</th>
              <th scope="col">Mode</th>
              
              
            </tr>
          </thead>
          <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
              <tr>
                <th scope="row"><?php echo $sr; ?></th>
                <td><?php echo $row['vehicle_no']; ?></td>
                <td><?php echo $row['tracker_id']; ?></td>
                <td><?php echo $row['date_of_registration']; ?></td>
                <td><?php echo $row['mode']; ?></td>
              </tr>
            <?php
              $sr = $sr + 1;
            } ?>
          </tbody>
        </table>
      </div>
          </div> 
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script>

      
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>