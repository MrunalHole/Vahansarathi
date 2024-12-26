<?php
if (isset($_SESSION['loggedin'])) {

?>
   <div class="sidebar">
      <div class="row">
         <!-- right side navbar -->
         <div>

            <nav class="nav d-block">
            <h3 class="navbar-brand" href="#"><i class="fas fa-car mr-1 "></i><samp>VahanSarathi</samp></h3>
               <div class="sidemenu">
                  <a class="nav-link
                                      <?php if (basename($_SERVER['PHP_SELF']) == "index.php") {
                                          echo " active";
                                       } else {
                                          echo "";
                                       } ?>" href="index.php"><i class="fas fa-user mr-1 "></i><span>Home</span></a>
               </div>
               <div class="sidemenu">
                  <a class="nav-link
                                      <?php if (basename($_SERVER['PHP_SELF']) == "registration.php") {
                                          echo " active";
                                       } else {
                                          echo "";
                                       } ?>" href="registration.php"><i class="fas fa-car mr-1 "></i><span>Registration</span></a>
               </div>
               <div class="sidemenu">
                  <a class="nav-link
                                      <?php if (basename($_SERVER['PHP_SELF']) == "addAdmin.php") {
                                          echo " active";
                                       } else {
                                          echo "";
                                       } ?>" href="addAdmin.php"><i class="fas fa-user mr-1 "></i><span>Add New Admin</span></a>
               </div>
               <div class="sidemenu">
                  <a class="nav-link
                                      <?php if (basename($_SERVER['PHP_SELF']) == "logout.php") {
                                          echo " active";
                                       } else {
                                          echo "";
                                       } ?>" href="partials/logout.php"> <i class="fas fa-sign-out-alt mr-1"></i><span>Logout</span></a>
               </div>



            </nav>

         </div>
      </div>
   </div>

<?php
} else {
   header("location:../admin/login.php??pleaseLogin");
}
?>