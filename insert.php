<?php

 

if (isset($_POST['reg'])) {
    $Name = $_POST['name'];
    $Password = $_POST['password'];
    $Email = $_POST['email'];
    $Mobile = $_POST['mobile'];
    $Address = $_POST['address'];
    $Gender = $_POST['gender'];
    $Dateofbirth = $_POST['dob'];
    $target="image/";
    $pic=$target.$_FILES['pic']['name'];
    move_uploaded_file($_FILES['pic']['tmp_name'], $target.$_FILES['pic']['name']);
   
    //$Image = $_POST['upload'];
    $db=mysqli_connect("localhost", "root", "admin@123", "registration");/*or die("not connected")*/
    $query = "INSERT INTO user (name, password, email, mobile, address, gender, dob,image) VALUES ('$Name','$Password','$Email','$Mobile','$Address','$Gender','$Dateofbirth',' $pic')";
   $result= mysqli_query($db, $query) or die("Error!!!!!!!");
    if ($result)
        {
        header("refresh:1;url=login.php");
    }
 else {
        echo 'error';    
    }
}


?>