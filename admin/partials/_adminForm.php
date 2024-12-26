<div class="formstyle">
    <div class="studentform">
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
            <h2>Add Admin Details</h2>
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
                        <label for="mob">Mobile Number</label>
                        <input type="text" class="form-control" id="mob" name="mob" required placeholder="Enter Your Mobile Number">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="email">Email ID</label>
                        <input type="text" class="form-control" id="email" name="email" required placeholder="Enter Your  Email">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="license">License Number</label>
                        <input type="textarea" class="form-control" id="license" name="license" required placeholder="Enter License Number" required>
                    </div>
                </div>
            </div>
            <div class="row gutters">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group text-right">
                        <button type="submit" id="submit" name="submit" class="btn btn-secondary ">Add Admin</button>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <button type="reset" id="submit" name="submit" class="btn btn-secondary">Reset</button>

                    </div>
                </div>

            </div>
    </div>

    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "_dbconnect.php";

    $name = $_POST['username'];
    $mob = $_POST['mob'];
    $email = $_POST['email'];
    $license = $_POST['license'];
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

    $sql = "select * from `admin` where license_no='$license';";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if ($numRows > 0) {
        $page = "addAdmin.php?adminAdded=false&&AdminIsAlreadyRegisterd";
        echo '<script type="text/javascript">';
        echo 'window.location.href="' . $page . '";';
        echo '</script>';
    } else {
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        $insert = "INSERT INTO `admin` (`name`, `license_no`, `mobile_no`, `password`, `role`) VALUES ('$name', '$license', '$mob', '$hash', 'admin');";
        $result = mysqli_query($conn, $insert);
        if ($result) {
            $showAlert = true;
            $to_email = "$email";
            $subject = "Login Credential";
            $body = "Dear $name, </br>";
            $body .= "<div>Greetings from VahanSarathi, Hope you are doing well!</br></div>";
            $body .= "<div>Congratulatons! </br></div>";
            $body .= "<div>Your account has been created sccessfully.</br></div>";
            $body .= "<div>Username: $license</br></div>";
            $body .= "<div>Password: $pass</br></div>";
            $body .= file_get_contents("partials/template.html");
            // Set content-type for sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: contact@vahansarathi.in";
            if (mail($to_email, $subject, $body, $headers)) {
                echo "Email successfully sent to $to_email...";
            } else {
                echo "Email sending failed...";
            }
            // header("location: ../addAdmin.php?signupsuccess=true&&loginDetailsHasBeenSentToUser");
            $page = "addAdmin.php?adminAdded=true";
            echo '<script type="text/javascript">';
            echo 'window.location.href="' . $page . '";';
            echo '</script>';
        } else {
            // echo ("Error description: " . $conn->error);
            // header("location: ../addAdmin.php?signupsuccess=false&&databaseError");
            $page = "addAdmin.php?adminAdded=false";
            echo '<script type="text/javascript">';
            echo 'window.location.href="' . $page . '";';
            echo '</script>';
        }
    }
}


?>