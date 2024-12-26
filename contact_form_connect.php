<?php
if(($_SERVER["REQUEST_METHOD"]=="POST")) {
    
        
        $name = $_POST['name'];
        $mob_num = $_POST['mob_num'];
        $address= $_POST['address'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        $helpdesk = $_POST['helpdesk'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "avtatspc_2021_22";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            
            $Insert = "INSERT INTO `contact_us` (`name`, `mobile_num`, `address`, `email`, `country`, `helpdesk`) VALUES ('$name', '$mob_num', '$address', '$email', '$country', '$helpdesk');  ";

                        
              $Result = mysqli_query($conn,$Insert);
                if ($Result) {
                    header("location: Contact-Us.php?QuerySentSuccessfully");
                
                }
                else {
                  header("location: Contact-Us.php?errorOccurred");
                }
            }
            
            $conn->close();
        }
    
    

else {
    
    header("location: Contact-Us.php");
}
?>