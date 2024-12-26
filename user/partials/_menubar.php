<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

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
                                      } ?>" href="index.php"><i class="fas fa-home mr-1 "></i> <span>Home</span></a>
        </div>
        <div class="menubar-top">
          <a class="nav-link
                                      <?php if (basename($_SERVER['PHP_SELF']) == "profile.php" or basename($_SERVER['PHP_SELF']) == "editProfile.php" or basename($_SERVER['PHP_SELF']) == "changePassword.php") {
                                        echo " active";
                                      } else {
                                        echo "";
                                      } ?>" href="profile.php"><i class="fas fa-user mr-1 "></i> <span>Profile</span></a>
        </div>
        <div class="menubar-top">
          <a class="nav-link
                                      <?php if (basename($_SERVER['PHP_SELF']) == "vehicles.php") {
                                        echo " active";
                                      } else {
                                        echo "";
                                      } ?>" href="vehicles.php"><i class="fas fa-car mr-1 "></i><span>My Vehicles</span></a>
        </div>

        <div class="menubar-top">
          <a class="nav-link
                                      <?php if (basename($_SERVER['PHP_SELF']) == "users.php") {
                                        echo " active";
                                      } else {
                                        echo "";
                                      } ?>" href="users.php"> <i class="fas fa-users mr-1 "></i><span>Users</span></a>
        </div>
        <div class="menubar-top">
          <a class="nav-link
                                     <?php if (basename($_SERVER['PHP_SELF']) == "addUser.php") {
                                        echo " active";
                                      } else {
                                        echo "";
                                      } ?>" href="addUser.php"> <i class="fas fa-user-plus mr-1 "></i><span>Add User</span></a>
        </div>
        <div class="menubar-top">
          <a class="nav-link
                                      <?php if (basename($_SERVER['PHP_SELF']) == "history.php") {
                                        echo " active";
                                      } else {
                                        echo "";
                                      } ?>" href="history.php"> <i class="fas fa-history mr-1"></i><span>History</span></a>
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
} else {
  echo "Session not started";
}
?>