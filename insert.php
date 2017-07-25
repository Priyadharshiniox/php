<?php



if (isset($_POST['reg'])) {
    $Name = $_POST['uname'];
    $Password = $_POST['password'];
    $Email = $_POST['email'];
    $Mobile = $_POST['mobile'];
    $Address = $_POST['address'];
    $Gender = $_POST['gender'];
    $Dateofbirth = $_POST['dob'];
    $Image = $_POST['image'];
    $db=mysqli_connect("localhost", "root", "admin@123", "registration")/*or die("not connected")*/;
    $query = "INSERT INTO user (name, password, email, mobile, address, gender, dob) VALUES ('$Name','$Password','$Email','$Mobile','$Address','$Gender','$Dateofbirth')";
    if (mysqli_query($db,$query)) {
        echo 'inserted';
    }
}
/* else{
  echo 'not inserted';
  } */
header("refresh:1;url=login.php");
?>