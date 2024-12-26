<?php
session_start();
echo "Logging you out, pleas wait...!";
session_destroy();
header("location:../login.php?loggedout=true");
?>