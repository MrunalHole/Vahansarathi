<?php
if(isset($_POST['check_submit_btn'])&& isset($_POST['license'])){
        include "_dbconnect.php";
        $license = $_POST['license'];
        $sql="select * from `user` where license_no='$license';";
    $result=mysqli_query($conn,$sql);
    $numRows=mysqli_num_rows($result);
    if($numRows==0){
        echo "Please Enter Valid License No";
    }
    else{
    //    echo "Valid credentials";
    }
}



if(isset($_POST['check_submit_btn2']) && isset($_POST['password']) && isset($_POST['license'])){
    include "_dbconnect.php";
    $license = $_POST['license'];
    $pass = $_POST['password'];
    $sql="select * from `user` where license_no='$license';";
    $result=mysqli_query($conn,$sql);
    $numRows=mysqli_num_rows($result);
    if($numRows==1){
        $row=mysqli_fetch_assoc($result);
        if(password_verify($pass,$row['password'])){
        }
        else
        {
        echo "Pleas Enter Valid Password";
        }
    }
    else{
    echo "Both Credentials Must Be Valid";
    }
}
