<!DOCTYPE html>
<?php
session_start();
$name = $_SESSION['name'];

if($name)
    {
    echo 'you are successfully logged in';
    
    }
 else{
        
        header('location:login.php');
 }
?>
<html>
    <head>
        <style>
            .signout{
                background: skyblue;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 850px;
                cursor: pointer; 
            }
        </style>

    </head>
    <body>
        <h1 style="text-align: center">Account Page</h1>
        <h3 style="text-align: center;color: red">You are successfully logged in</h3>
        <form action="logout.php" method="post">
            <button class="signout">Sign out</button>
        </form>
    </body>
</html>