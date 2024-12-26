<?php

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    include "partials/_dbconnect.php";
    $user = $_SESSION['user_id'];
}

$sql = "select * from `user` where user_id=$user";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->

    <meta charset="utf-8">
    <meta name="description" content="The youth, inspired by the thoughts of Chhatrapati Shivaji Maharaj, came together and started the organization of Yuva Maharashtra. Through Yuva Maharashtra, youth preserve history, culture and do social services And now we are coming forward to help people who needs plasma, beds, medicines, etc.">
    <meta name="keywords" content="Covid19, Yuva Maharashtra, YM Helpline, Corona, Covaccine, Plasma, Plasma donor, blood donor, Support India, ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="content-language" content="en-MR" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/styles.css" class="css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>YM Helpline Profile</title>
    <style type="text/css">
        body {
            color: #797979;
            background: #f1f2f7;
            font-family: 'Open Sans', sans-serif;
            padding: 0px !important;
            margin: 0px !important;
            font-size: 13px;
            /* text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-font-smoothing: antialiased; */
        }

        .profile-nav,
        .profile-info {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .profile-nav .user-heading {
            background: #f8f7f5;
            color: black;
            border-radius: 4px 4px 0 0;
            -webkit-border-radius: 4px 4px 0 0;
            padding: 30px;
            text-align: center;
        }

        .profile-nav .user-heading.round a {
            border-radius: 50%;
            -webkit-border-radius: 50%;
            border: 10px solid rgba(255, 255, 255, 0.3);
            display: inline-block;
        }

        .profile-nav .user-heading a img {
            width: 112px;
            height: 112px;
            border-radius: 50%;
            -webkit-border-radius: 50%;
        }

        .profile-nav .user-heading h1 {
            font-size: 22px;
            font-weight: 300;
            margin-bottom: 5px;
        }

        .profile-nav .user-heading p {
            font-size: 12px;
        }

        .profile-nav ul {
            margin-top: 1px;
        }

        .profile-nav ul>li {
            border-bottom: 1px solid #ebeae6;
            margin-top: 0;
            line-height: 30px;
        }



        .profile-nav ul>li>a {
            border-radius: 0;
            -webkit-border-radius: 0;
            color: orange;
            border-left: 5px solid #fff;
            text-decoration: none;
        }

        .profile-nav ul>li>a:hover,
        .profile-nav ul>li>a:focus,
        .profile-nav ul li.active {
            background: #f8f7f5 !important;
            border-left: 5px solid #fbc02d;
            color: #89817f !important;
        }

        .profile-nav ul>li:last-child>a:last-child {
            border-radius: 0 0 4px 4px;
            -webkit-border-radius: 0 0 4px 4px;
        }

        .profile-nav ul>li>a>i {
            font-size: 16px;
            padding-right: 10px;
            color: #bcb3aa;
        }

        .r-activity {
            margin: 6px 0 0;
            font-size: 12px;
        }


        .p-text-area,
        .p-text-area:focus {
            border: none;
            font-weight: 300;
            box-shadow: none;
            color: #c3c3c3;
            font-size: 16px;
        }

        .profile-info .panel-footer {
            background-color: #f8f7f5;
            border-top: 1px solid #e7ebee;
        }

        .profile-info .panel-footer ul li a {
            color: #7a7a7a;
        }

        .bio-graph-heading {
            background: #fbc02d;
            color: #fff;
            text-align: center;
            font-style: italic;
            padding: 40px 110px;
            border-radius: 4px 4px 0 0;
            -webkit-border-radius: 4px 4px 0 0;
            font-size: 16px;
            font-weight: 300;
        }

        .bio-graph-info {
            background: #f1f2f7;
            padding: 10px;
            color: gray;
            font-weight: 300;
            font-size: 15px;
        }

        .bio-graph-info h1 {
            font-size: 22px;
            font-weight: 300;
            margin: 0 0 20px;
        }

        .bio-row {
            border-bottom: 1px solid rgb(255, 255, 255, 0.5);
            width: 50%;
            float: left;
            margin-bottom: 10px;
            padding: 0 15px;
        }

        .bio-row p span {
            width: 100px;
            display: inline-block;
        }

        .bio-chart,
        .bio-desk {
            float: left;
        }

        .bio-chart {
            width: 40%;
        }

        .bio-desk {
            width: 60%;
        }

        .bio-desk h4 {
            font-size: 15px;
            font-weight: 400;
        }

        .bio-desk h4.terques {
            color: #4CC5CD;
        }

        .bio-desk h4.red {
            color: #e26b7f;
        }

        .bio-desk h4.green {
            color: #97be4b;
        }

        .bio-desk h4.purple {
            color: #caa3da;
        }

        .file-pos {
            margin: 6px 0 10px 0;
        }

        .profile-activity h5 {
            font-weight: 300;
            margin-top: 0;
            color: #c3c3c3;
        }

        .summary-head {
            background: #ee7272;
            color: #fff;
            text-align: center;
            border-bottom: 1px solid #ee7272;
        }

        .summary-head h4 {
            font-weight: 300;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .summary-head p {
            color: rgba(255, 255, 255, 0.6);
        }

        ul.summary-list {
            display: inline-block;
            padding-left: 0;
            width: 100%;
            margin-bottom: 0;
        }

        ul.summary-list>li {
            display: inline-block;
            width: 19.5%;
            text-align: center;
        }

        ul.summary-list>li>a>i {
            display: block;
            font-size: 18px;
            padding-bottom: 5px;
        }

        ul.summary-list>li>a {
            padding: 10px 0;
            display: inline-block;
            color: #818181;
        }

        ul.summary-list>li {
            border-right: 1px solid #eaeaea;
        }

        ul.summary-list>li:last-child {
            border-right: none;
        }

        .activity {
            width: 100%;
            float: left;
            margin-bottom: 10px;
        }

        .activity.alt {
            width: 100%;
            float: right;
            margin-bottom: 10px;
        }

        .activity span {
            float: left;
        }

        .activity.alt span {
            float: right;
        }

        .activity span,
        .activity.alt span {
            width: 45px;
            height: 45px;
            line-height: 45px;
            border-radius: 50%;
            -webkit-border-radius: 50%;
            background: #eee;
            text-align: center;
            color: #fff;
            font-size: 16px;
        }

        .activity.terques span {
            background: #8dd7d6;
        }

        .activity.terques h4 {
            color: #8dd7d6;
        }

        .activity.purple span {
            background: #b984dc;
        }

        .activity.purple h4 {
            color: #b984dc;
        }

        .activity.blue span {
            background: #90b4e6;
        }

        .activity.blue h4 {
            color: #90b4e6;
        }

        .activity.green span {
            background: #aec785;
        }

        .activity.green h4 {
            color: #aec785;
        }

        .activity h4 {
            margin-top: 0;
            font-size: 16px;
        }

        .activity p {
            margin-bottom: 0;
            font-size: 13px;
        }

        .activity .activity-desk i,
        .activity.alt .activity-desk i {
            float: left;
            font-size: 18px;
            margin-right: 10px;
            color: #bebebe;
        }

        .activity .activity-desk {
            margin-left: 70px;
            position: relative;
        }

        .activity.alt .activity-desk {
            margin-right: 70px;
            position: relative;
        }

        .activity.alt .activity-desk .panel {
            float: right;
            position: relative;
        }

        .activity-desk .panel {
            background: #F4F4F4;
            display: inline-block;
        }


        .activity .activity-desk .arrow {
            border-right: 8px solid #F4F4F4 !important;
        }

        .activity .activity-desk .arrow {
            border-bottom: 8px solid transparent;
            border-top: 8px solid transparent;
            display: block;
            height: 0;
            left: -7px;
            position: absolute;
            top: 13px;
            width: 0;
        }

        .activity-desk .arrow-alt {
            border-left: 8px solid #F4F4F4 !important;
        }

        .activity-desk .arrow-alt {
            border-bottom: 8px solid transparent;
            border-top: 8px solid transparent;
            display: block;
            height: 0;
            right: -7px;
            position: absolute;
            top: 13px;
            width: 0;
        }

        .activity-desk .album {
            display: inline-block;
            margin-top: 10px;
        }

        .activity-desk .album a {
            margin-right: 10px;
        }

        .activity-desk .album a:last-child {
            margin-right: 0px;
        }
    </style>
</head>

<body>

    <div class="container bootstrap" style="margin-bottom:20px;">
        <div class="row">
            <div class="profile-nav col-md-3">
                <div class="panel">
                    <div class="user-heading round">
                        <a href="#">
                            <img src="profile.png" alt="">
                        </a>
                        <h1><?php echo $row['user_name']; ?></h1>
                        <p><?php echo $row['email']; ?></p>
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active" style="padding-right:10px;"><a href="profile.php"> <i class="fa fa-user"></i> Profile</a></li>
                            <li style="padding-right:10px;"><a href="changePassword.php"> <i class="fa fa-lock"></i> Change Password</a></li>
                            <li style="padding-right:10px;"><a href="editProfile.php"> <i class="fa fa-edit"></i> Edit profile</a></li>
                            <li style="padding-right:10px;"><a href="partials/logout.php"><i class="fa fa-sign-out-alt"></i>Logout</a></li>

                        </ul>
                    </div>


                </div>
            </div>
            <?php
            $id = $_SESSION['user_id'];
            $sql = "SELECT * FROM `user` where user_id=$id;";
            $execute = mysqli_query($conn, $sql);
            $row = $execute->fetch_object();
            ?>
            <div class="profile-info col-md-9" style="margin-top: -30px;">

                <div class="panel">
                    <div class="panel-body bio-graph-info">
                        <div class="container-fluid mt-5">
                            <div class="main">
                                <div class="row">
                                    <div class="tab-pane active" id="editprofile">
                                        <h6>EDIT YOUR PROFILE INFORMATION</h6>
                                        <hr>
                                        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">UserName</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" name="Username" value="<?= $row->user_name; ?>">

                                            </div>

                                            <div class="mb-3">

                                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $row->user_id; ?>">

                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Mobile Number</label>
                                                <input type="tel" class="form-control" id="exampleFormControlInput1" name="mobile_no" value="<?= $row->mobile_no; ?>">


                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Email ID</label>
                                                <input type="email" class="form-control" id="exampleFormControlInput1" name="Email" value="<?= $row->email; ?>">

                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">License Number</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" name="license_no" value="<?= $row->license_no; ?>">

                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Vehicle Number</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" name="vehicle_no" value="<?= $row->vehicle_no; ?>">

                                            </div>


                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Date of Birth</label>
                                                <input type="date" class="form-control" id="exampleFormControlInput1" name="date_of_birth" value="<?= $row->date_of_birth; ?>">

                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Select Role</label>
                                                <select class="form-control" name="role" id="role" required value="<?= $row->role; ?>">
                                                    <option value="Owner">Owner</option>
                                                    <option value="Driver">Driver</option>
                                                </select>

                                            </div>
                                            <div class="form-group form-text text-muted small">
                                                By filling out all the fiels on this page, you're giving us consent to share this data whenever your User profile appears.
                                            </div>
                                            <br>
                                            <button class="btn btn-outline-info" type="submit">Update Profile</button>

                                            <button class="btn btn-outline-info" type="reset">Reset Changes</button>



                                    </div>

                                </div>

                                </form>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <?php



    ?>
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "_dbconnect.php";
    $name = $_POST['Username'];
    $email = $_POST['Email'];
    $mob_number = $_POST['mobile_no'];
    $date_of_birth = $_POST['date_of_birth'];
    $license_no = $_POST['license_no'];
    $vehicle_no = $_POST['vehicle_no'];
    $role = $_POST['role'];
    $id = $_SESSION['user_id'];

    $existsql = "select * from `vehicle` where vehicle_no='$vehicle_no'";
    $result = mysqli_query($conn, $existsql);
    $numRows = mysqli_num_rows($result);

    if ($numRows > 0) {

        $sql = "UPDATE  `user` SET `user_name`='$name',`email`='$email', `mobile_no`='$mob_number',  `date_of_birth`='$date_of_birth', `license_no`='$license_no', `vehicle_no`='$vehicle_no',  `role`='$role' WHERE `user`.`user_id`=$id;";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo 'data inserted';
            $showAlert = true;
            $page = "profile.php?proileUpdated=true";
            echo '<script type="text/javascript">';
            echo 'window.location.href="' . $page . '";';
            echo '</script>';
            //header("location: /profile.php ?proileUpdated=true");

        } else {
           // header("location: /profile.php ?proileUpdated=false");
           $page = "profile.php?proileUpdated=false";
            echo '<script type="text/javascript">';
            echo 'window.location.href="' . $page . '";';
            echo '</script>';
        }
    }
}

?>