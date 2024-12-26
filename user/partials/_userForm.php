<div class="formstyle">
    <div class="studentform">
                        <form action="partials/_addUserControl.php" method="POST">
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
                                        <input type="text" class="form-control" id="mob" name="mob" required placeholder="Enter Your Mobile Number">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="pmob">Email</label>
                                        <input type="Email" class="form-control" id="email" name="email" required placeholder="Enter your email address">
                                    </div>
                                </div>
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
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="license">License Number</label>
                                        <input type="textarea" class="form-control" id="license" name="license" required placeholder="Enter License Number" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="input_wrap">
                                <label for="mobnum">Vehicle No</label>
                                <select class="form-control" name="vehicle" id="vehicle">
                            <option value="">Select Option</option>
                            <?php
                            include "_dbconnect.php";
                            $no=$_SESSION['license_no'];
                            $sql="SELECT * FROM `vehicle` where license_no= '$no';";
                            $execute=mysqli_query($conn,$sql);
                            while ($row = mysqli_fetch_assoc($execute)) {

                                $license = $row['vehicle_no'];
                                
                                echo '
                                    <option value="' . $license . '">' . $license . '</option>';
                            }
                            ?>
                        </select>
                                </div>
                                </div>
                                
                            </div>
                            
                               
                            
                               <div class="row gutters">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group text-right">
                                    <button type="submit" id="submit" name="submit"class="btn btn-secondary ">Add User</button>
                                </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <button type="reset" id="submit" name="submit"class="btn btn-secondary">Reset</button>
                                        
                                    </div>
                                </div>

                            </div>
                    </div>
               
                </form>
                </div>
                    
                    
                    
                    

</div>