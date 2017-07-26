<?php

$name=$_POST[name];
$password=$_POST[password];

$db=mysqli_connect("localhost", "root", "admin@123", "registration");
$selectquery = "SELECT * FROM user WHERE name='$name' AND password='$password'";
$result=mysqli_query($db, $selectquery);
        if(mysqli_num_rows($result)){
                       
                       header('location:account.php');
        }
        else{
            echo "invalid username and password";
        }

?>
