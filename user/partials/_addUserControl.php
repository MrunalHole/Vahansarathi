<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //echo 'reading form data';
    include '_dbconnect.php';
    $name = $_POST['username'];
    $role = $_POST['role'];
    $email = $_POST['email'];
    $mob = $_POST['mob'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $license = $_POST['license'];
    $vehicle = $_POST['vehicle'];


    // password
    function generateRandomString($length = 8)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    $pass = generateRandomString();

    //to check email is alreadyy exists or not

    $existsql = "select * from `user` where vehicle_no='$vehicle' and license_no='$license';";
    $result = mysqli_query($conn, $existsql);
    $numRows = mysqli_num_rows($result);
    if ($numRows > 0) {
        $showError = "User is already registered";
        header("location: ../addUser.php?signup=false&&error=$showError");
        //   echo $showError;

    } else {

        $hash = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `user` ( `user_name`, `mobile_no`, `email`, `license_no`, `vehicle_no`, `date_of_birth`, `role`, `password`) VALUES ('$name', '$mob', '$email', '$license', '$vehicle', '$dob', '$role', '$hash');";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $showAlert = true;
            $to_email = "$email";
            $subject = "Login Credential";
            $body = "Dear $name, </br>";
            $body .= "<div>Greetings from VahanSarathi, Hope you are doing well!</br></div>";
            $body .= "<div>Congratulatons! </br></div>";
            $body .= "<div>Your account has been created sccessfully.</br></div>";
            $body .= "<div>Vehicle No: $vehicle</br></div>";
            $body .= "<div>Username: $license</br></div>";
            $body .= "<div>Password: $pass</br></div>";
            $body .= file_get_contents("template.html");
            // Set content-type for sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: contact@vahansarathi.in";

            if (mail($to_email, $subject, $body, $headers)) {
                echo "Email successfully sent to $to_email...";
            } else {
                echo "Email sending failed...";
            }
            header("location: ../addUser.php?signupsuccess=true&&loginDetailsHasBeenSentToUser");
        } else {
            echo ("Error description: " . $conn->error);
            header("location: ../addUser.php?signupsuccess=false&&databaseError");
        }
    }
}
