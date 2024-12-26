<?php
$vehicle = $_SESSION['vehicle'];
include "_dbconnect.php";
// Journey details
$journeySQL = "select * from journey where vehicle_no='$vehicle';";
$result = mysqli_query($conn, $journeySQL);
$numRows=mysqli_num_rows($result);
if($numRows>0){
$row = mysqli_fetch_assoc($result);
$id = $row['user_id'];
}
else{
    $id=$_SESSION['user_id'];
}

// Driver details
$driverSQL = "select * from user where user_id='$id';";
$driverResult = mysqli_query($conn, $driverSQL);
$driverRow = mysqli_fetch_assoc($driverResult);

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />


<div class="col-md-12 ">
    <div class="row ">
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-cherry">
                <div class="card-statistic-3" style="padding-top:20px; padding-left:20px;">
                    <div class="card-icon card-icon-large"><i class="fas fa-car"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0 ">Vehicle Details</h5>
                        <h6 class="details">Total Vehicles: 4</h6>
                        <!-- <h6 class="details">Owner: <?php echo $_SESSION['username']; ?></h6>
                        <h6 class="details">Status: <?php echo $row['status']; ?> </h6> -->
                        <!-- <h6 class="d-flex align-items-center mb-0">Vehicle No: <?php echo $_SESSION['vehicle']; ?></h6> -->
                        <a class="userdetails" href="">View Details</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-blue-dark">
                <div class="card-statistic-3" style="padding-top:20px; padding-left:20px;">
                    <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Driver Details</h5>
                        <h6 class="details">Total Drivers: 6</h6>
                        <!-- <h6 class="details">Driver: <?php echo $driverRow['user_name']; ?></h6>
                        <h6 class="details">License No: <?php echo $driverRow['license_no']; ?> </h6>
                        <h6 class="d-flex align-items-center mb-0">Contact: <?php echo $driverRow['mobile_no']; ?></h6> -->
                        <a class="userdetails" href="">View Details</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-orange-dark">
                <div class="card-statistic-3" style="padding-top:20px; padding-left:20px;">
                    <div class="card-icon card-icon-large"><i class="fas fa-bell"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Warnings</h5>
                        <h6 class="details">Over Speed: 7</h6>
                        <!-- <h6 class="details">License No: <?php echo $driverRow['license_no']; ?> </h6>
                        <h6 class="d-flex align-items-center mb-0">Contact: <?php echo $driverRow['mobile_no']; ?></h6> -->
                        <a class="userdetails" href="">View Details</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-green-dark">
                <div class="card-statistic-3" style="padding-top:20px; padding-left:20px;">
                    <div class="card-icon card-icon-large"><i class="fas fa-tachometer"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Speed Limit</h5>
                        <h6 class="details">Speed Limit: 80 KM/HR</h6>
                        <!-- <h6 class="details">License No: <?php echo $driverRow['license_no']; ?> </h6>
                        <h6 class="d-flex align-items-center mb-0">Contact: <?php echo $driverRow['mobile_no']; ?></h6> -->
                        <a class="userdetails" href="">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12 ">
    <div class="row ">
        <div class=" col-lg-10">
            <div class="card ">
                <div class="card-statistic-3 p-1">
                    <div id="map-container-google-1" class="z-depth-1-half map-container">
                        <!-- <iframe src="https://maps.google.com/maps?q=pimpri&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                   
                    <?php
                    include "partials/_map.php";
                    ?>
                        </div>

                </div>
            </div>
        </div>
        <div class=" col-lg-2">
            <div class="card ">
                <div class="card-statistic-3 p-4" style="height: 460px;">
                    <div class="card speedometer">
                        <div class="speed">
                            <h3>75</h3><span>km/hr</span>
                        </div>
                    </div>
                    
                    <div class="speddometer-details">
                        <div class="speedo-separator">
                            <small>Vehicle  Details</small></br>
                            <strong><small><?php echo $driverRow['vehicle_no']; ?></small></strong>
                        </div>
                    </div>

                    <div class="speddometer-details">
                        <div class="speedo-separator">
                            <small>Driver Details</small></br>
                            <strong><small><?php echo $driverRow['user_name']; ?></small></strong>
                        </div>
                    </div>
                    <div class="speddometer-details">
                        <div class="speedo-separator">
                            <small>Current Location</small></br>
                         <strong>   <small style="font-size: small;">18.6298°N,73.7997°E</small></strong><br>
                          <strong>  <small>Pimpri</small></strong>
                        </div>
                    </div>

                    <div class="speddometer-details">
                        <div class="speedo-separator">
                            <small>Vehicle started at</small></br>
                           <strong> <small style="font-size: small;">18.5204°N,73.8567°E</small></strong></br>
                            <strong><small>Pune</small></strong>
                        </div>
                    </div>
                    
                    <div class="speddometer-details">
                        <div class="speedo-separator">
                            <small>Started Date & Time</small></br>
                            <strong><small><?php echo date("Y:m:d  h:ia")?></small></strong>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
       
    </div>
</div>