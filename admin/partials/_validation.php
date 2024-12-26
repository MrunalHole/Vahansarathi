<?php
// Check dublicate user
if(isset($_POST['check_license_btn'])&& isset($_POST['license'])){
    include "_dbconnect.php";
    $license = $_POST['license'];
    $sql="select * from `user` where license_no='$license';";
$result=mysqli_query($conn,$sql);
$numRows=mysqli_num_rows($result);
if($numRows>0){
    echo "This license no is already registered";
}
else{
   
}
}


// Check Dublicate vehicle
if(isset($_POST['check_vehicle_btn'])&& isset($_POST['vehicle'])){
    include "_dbconnect.php";
    $vehicle = $_POST['vehicle'];
    $sql="select * from `vehicle` where vehicle_no='$vehicle';";
$result=mysqli_query($conn,$sql);
$numRows=mysqli_num_rows($result);
if($numRows>0){
    echo "This vehicle is already registered";
}
else{
   
}
}


// Checking Dublicate Tracker

if(isset($_POST['check_tracker_btn'])&& isset($_POST['tracker'])){
    include "_dbconnect.php";
    $tracker = $_POST['tracker'];
    $sql="select * from `tracker` where tracker_id='$tracker';";
$result=mysqli_query($conn,$sql);
$numRows=mysqli_num_rows($result);
if($numRows>0){
    echo "This tracker is already reagistered";
}
else{
   
}
}


//Sending OTP
if(isset($_POST['send_otp_btn']) && isset($_POST['email'])){
    function generateRandomString($length = 6)
    {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    $otp = generateRandomString();
    $email=$_POST['email'];
    $to_email = "$email";
    $subject = "Email verification OTP";
    $body = "Dear user, </br>";
    $body .= "<div>Greetings from VahanSarathi, Hope you are doing well!</br></div>";
    $body .= "<div>Your verification code (OTP) is: ".$otp." </br></div>";
    
    // Set content-type for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: contact@vahansarathi.in";
    if (mail($to_email, $subject, $body, $headers)) {
        echo $otp;
    } else {
        echo "Error";
    }
}
