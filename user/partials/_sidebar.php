<?php
 if(isset($_SESSION['loggedin'])&&$_SESSION['loggedin']==true){ 

?>
<div class="sidebar">
            <div class="row">
                      <!-- right side navbar -->
                      <div>
                          
                                <nav class="nav d-block">
                                <h3 class="navbar-brand" href="#"><i class="fas fa-car mr-1 "></i><samp>VahanSarathi</samp></h3>
                                <div class="sidemenu"> 
                                   <a class="nav-link
                                      <?php if(basename($_SERVER['PHP_SELF'])=="index.php" ){echo " active";}else {echo"";}?>"
                                       href="index.php"><i class="fas fa-home mr-1 "></i> Home</a>
                                    </div>
                                   <div class="sidemenu"> 
                                   <a class="nav-link
                                      <?php if(basename($_SERVER['PHP_SELF'])=="profile.php" or basename($_SERVER['PHP_SELF'])=="editProfile.php" or basename($_SERVER['PHP_SELF'])=="changePassword.php"){echo " active";}else {echo"";}?>"
                                       href="profile.php"><i class="fas fa-user mr-1 "></i> Profile</a>
                                    </div>
                                    <div class="sidemenu"> 
                                   <a class="nav-link
                                      <?php if(basename($_SERVER['PHP_SELF'])=="vehicles.php"){echo " active";}else {echo"";}?>"
                                       href="vehicles.php"><i class="fas fa-car mr-1 "></i>My Vehicles</a>
                                    </div>
                                    
                                    <div class="sidemenu">
                                      <a class="nav-link
                                      <?php if(basename($_SERVER['PHP_SELF'])=="users.php"){echo " active";}else {echo"";}?>"
                                       href="users.php"> <i class="fas fa-users mr-1 "></i>Users</a>
                                    </div>
                                   <div class="sidemenu"> 
                                     <a class="nav-link
                                     <?php if(basename($_SERVER['PHP_SELF'])=="addUser.php"){echo " active";}else {echo"";}?>"
                                      href="addUser.php"> <i class="fas fa-user-plus mr-1 "></i>Add User</a>
                                    </div>
                                   <div class="sidemenu"> 
                                   <a class="nav-link
                                      <?php if(basename($_SERVER['PHP_SELF'])=="history.php"){echo " active";}else {echo"";}?>"
                                       href="history.php"> <i class="fas fa-history mr-1"></i>History</a>
                                    </div>
                                    
                                    <div class="sidemenu">
                                    <a class="nav-link
                                      <?php if(basename($_SERVER['PHP_SELF'])=="logout.php"){echo " active";}else {echo"";}?>"
                                       href="partials/logout.php"> <i class="fas fa-sign-out-alt mr-1"></i>Logout</a>
                                    </div>

                                   
                                   
                                  </nav>
                              
                        </div>
             </div>
</div>

<?php
}
else{
   header("location:../user/login.php");
}
?>
