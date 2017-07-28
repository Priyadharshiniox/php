

<?php

$name = $_POST[name];
$password = $_POST[password];
echo $name;
echo $password;

$db = mysqli_connect("localhost", "root", "admin@123", "registration");
$selectquery = "SELECT * FROM user WHERE  name='$name' AND password='$password'";
$result = mysqli_query($db, $selectquery) or die ('error');
if (mysqli_num_rows($result)==1) {
   session_start();
   //echo 'valid';
    header('location:account.php');
     $_SESSION["name"] = $name;
    
   
} else {
    echo "invalid username and password";
}
?>
