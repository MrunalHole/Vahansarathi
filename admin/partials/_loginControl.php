<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include '_dbconnect.php';
    $user=$_POST['username'];
  
   //$email="dpkbrvkr@gmail.com";
    //echo $email;
    $pass=$_POST['password'];
   //$pass="deeps98";
   //echo $pass;
    $sql="select * from `admin` where license_no='$user';";
    $result=mysqli_query($conn,$sql);
    $numRows=mysqli_num_rows($result);
    if($numRows==1){
        $row=mysqli_fetch_assoc($result);
        if(password_verify($pass,$row['password'])){
            session_start();
            $_SESSION['user_id']=$row['id'];
            $_SESSION['loggedin']=true;
            $_SESSION['useremail']=$email;
            $_SESSION['username']=$row['name'];
            $_SESSION['role']=$row['role'];
            $_SESSION['license_no']=$row['license_no'];   
            header("location:../index.php?loggedin=true");
            exit();
           

        }
        else{
        $ShowPasswordError="Incorrect Password";
        
        header("location:../login.php?loginPassError=false&&error=$ShowPasswordError");
        exit();
    }
           
        }
        else{       
        $ShowEmailError="Email is not registered";
       echo $user;
       header("location:../login.php?loginEmailError=false&&error=$ShowEmailError");
           }
        
    }

?>