<?php
session_start();
if(isset($_SESSION['loggedin'])&&$_SESSION['loggedin']==true && $_SESSION['role']=='admin' ){ 

?>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container-fluid">
    <h3 class="navbar-brand" href="#"><i class="fas fa-car mr-1 "></i><samp>VahanSarathi</samp></h3>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="menubar-top">
                  <a class="nav-link
                                      <?php if (basename($_SERVER['PHP_SELF']) == "index.php") {
                                          echo " active";
                                       } else {
                                          echo "";
                                       } ?>" href="index.php"><i class="fas fa-home mr-1 "></i><span>Home</span></a>
               </div>
               <div class="menubar-top">
                  <a class="nav-link
                                      <?php if (basename($_SERVER['PHP_SELF']) == "registration.php") {
                                          echo " active";
                                       } else {
                                          echo "";
                                       } ?>" href="registration.php"><i class="fas fa-car mr-1 "></i><span>Registration</span></a>
               </div>
               <div class="menubar-top">
                  <a class="nav-link
                                      <?php if (basename($_SERVER['PHP_SELF']) == "addAdmin.php") {
                                          echo " active";
                                       } else {
                                          echo "";
                                       } ?>" href="addAdmin.php"><i class="fas fa-user mr-1 "></i><span>Add New Admin</span></a>
               </div>
               <div class="menubar-top">
                  <a class="nav-link
                                      <?php if (basename($_SERVER['PHP_SELF']) == "logout.php") {
                                          echo " active";
                                       } else {
                                          echo "";
                                       } ?>" href="partials/logout.php"> <i class="fas fa-sign-out-alt mr-1"></i><span>Logout</span></a>
               </div>


      
    </div>
  </div>
</nav>
<?php
}
else{
   echo "Session not started";
}
?>