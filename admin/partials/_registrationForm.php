<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<?php
if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true") {
//     echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom:10px; width:100%; margin-left:auto; margin-right:auto;">
//     <strong>Success!</strong> User has been registerd successfully and login details has been sent to user.
//     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//       <span aria-hidden="true">&times;</span>
//     </button>
//   </div>';
?>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="">
                   
                </div>
                <div class="modal-body">
                    <center>
                    <h3 style="color: green;">Registration Successfull...!</h3>
                    <p>Login credentials has been sent to user.</p>
                    </center>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

        <script>
    //   alert("Seccesfull...!");
    $(document).ready(function(){
  
      $('#myModal').modal("show");
      

    
  });
  </script>
    <?php
}
    ?>

    <div class="formstyle">
        <div class="studentform">
            <form action="partials/_registrationControl.php" method="POST">
                <h2>Add User Details</h2>
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6 class="mb-2 text-primary">Personal Details</h6>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="username">Full Name</label>
                            <input type="text" class="form-control" id="username" name="username" required placeholder="Enter Your Name" required>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" name="dob" required placeholder="Enter Date of Birth" required>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="mob">Mobile Number</label>
                            <input type="number" class="form-control" id="mob" name="mob" minlength="10" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="10" required placeholder="Enter Your Mobile Number">

                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">

                            <label for="email">Email</label>
                            <small class="email_msg" id="email_msg" style="color: blue;"></small>
                            <div style="display: flex;">
                                <input type="hidden" name="email2" class="email2" id="email2" val="">
                                <input type="Email" class="form-control verify-email" style="border-top-right-radius: 0;border-bottom-right-radius: 0;" id="email" name="email" required placeholder="Enter your email address">
                                <button type="button" class="btn btn-info email-btn" id="email-btn" style="border-top-left-radius: 0;border-bottom-left-radius: 0; border:none;">Verify</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 otp-div" id="otp-div" style="display: none;">
                        <div class="form-group">
                            <input type="hidden" class="otp2" name="otp2" id="otp2" val="">
                            <label for="otp">OTP</label>
                            <small class="otp_msg" id="otp_msg" style="color: blue;">Please do not refresh the page</small>
                            <div style="display: flex;">
                                <input type="text" class="form-control otp1" style="border-top-right-radius: 0;border-bottom-right-radius: 0;" id="otp1" name="otp1" minlength="6" maxlength="6" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="6" required placeholder="Enter Your Email Verification Code">
                                <button type="button" class="bt btn-info otp-btn" id="otp-btn" style="border-top-left-radius: 0;border-bottom-left-radius: 0; border:none;">Verify OTP</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="official_details" name="official_details" id="official_details" style="display: none;">
                    <div class="row gutters">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="gender">Role</label>
                                <select class="form-control" name="role" id="role" required>

                                    <option value="">Select Role</option>
                                    <option value="owner">Owner</option>
                                    <option value="driver">Driver</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="textarea" class="form-control" id="address" name="address" required placeholder="Enter  Address" required>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mb-2 text-primary">Vehicle & License Details</h6>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="license">License Number</label>
                                <small class="license_error" style="color: red;"></small>
                                <input type="textarea" class="form-control check_license" id="license" name="license" required placeholder="Enter License Number" required>

                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="vehicle">Vehicle Number</label>
                                <small class="vehicle_error" style="color: red;"></small>
                                <input type="textarea" class="form-control check_vehicle" id="vehicle" name="vehicle" required placeholder="Enter Vehicle Number" required>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="vehicle">Tracker ID</label>
                                <small class="tracker_error" style="color: red;"></small>
                                <input type="textarea" class="form-control check_tracker" id="tracker" name="tracker" required placeholder="Enter Tracker ID" required>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="vehicle">Tracker Build By</label>
                                <input type="textarea" class="form-control" id="tracker_build_by" name="tracker_build_by" required placeholder="Tracker Build By" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group text-right">
                            <button type="submit" id="submit" name="submit" class="btn btn-info " disabled>Add User</button>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <button type="reset" id="" name="" class="btn btn-info">Reset</button>

                        </div>
                    </div>

                </div>
        </div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </div>
    <script src="../js/validation.js"></script>
