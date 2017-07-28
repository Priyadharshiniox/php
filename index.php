<?php
session_start();
if($_SESSION['name']){
    header('location:account.php');
}
?>

<html>
    <head>
        <style>
            .register{
                background: green;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
            }
            .login{
                background: skyblue;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer; 
            }
            div{
                text-align: center;
            }
            table{
                border-collapse: collapse;
            }
            img{
                width:150px;
                height:100px;
            }
        </style>
    </head>
    <body>
        <div>
            <h3>Home Page</h3>
            <form>
                <button class="register" formaction="register.php">Register</button>
                <button class="login" formaction="login.php">Login</button>

            </form>
        </div>  
        <div id="tab">
            <?php
            $db = mysqli_connect("localhost", "root", "admin@123", "registration");
            $result = "SELECT name, email , mobile, gender,image FROM user";
            $display = mysqli_query($db, $result);
            echo "<table width='60%' border='2px' align='center'><th>NAME</th><th>EMAIL</th><th>MOBILE</th><th>GENDER</th><th>PICTURE</th>";
            while ($data = mysqli_fetch_array($display)) {
                echo '<tr>';
                echo '<td>' . $data['name'] . '</td>';
                echo '<td>' . $data['email'] . '</td>';
                echo '<td>' . $data['mobile'] . '</td>';
                echo '<td>' . $data['gender'] . '</td>';
                echo "<td> <img src= '" . $data['image'] . "'></td>";
                echo '</tr>';
            }
            echo '</table>';
            mysqli_close($db);
            ?>
        </div>
    </body>

</html>