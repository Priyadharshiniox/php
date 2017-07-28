<!DOCTYPE html>
<?php
session_start();
if($_SESSION['name']){
    header('location:account.php');
}
?>

<html>
    <head>
        <script src="jquery-3.2.1.min.js"></script>
        <script src="validation.js"></script>

        <style>
            #form {
                border: 1px solid #999;
                padding: 0.25em;
                background: lightblue;
                width: 500px;
                margin:100px 50px 100px 600px;
                height: 700px;

            }

            div {
                padding-bottom: 0.98em;
                padding-top: 25px;
            }


            label {
                float: left;
                width: 6em;
                text-align: right;
                padding-right: 0.5em;

            }
            span{
                font-size: 14px;
                display: inline;
                color: red;
            }
            .hidden{
                display: none;
            }
        </style> 
    </head>
    <body>
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <h3 style="text-align:center">Registration Form</h3>

            <div id="form">

                <div>
                    <label>Name:</label>
                    <input type="text" id="name" name="name"><br>
                    <span class="hidden" id="uname"></span>
                </div>
                <div>
                    <label>Password:</label>
                    <input type="text" id="password" name="password"><br>
                    <span class="hidden" id="pwd"></span>
                </div>
                <div>
                    <label>Email:</label>
                    <input type="text" id="email" name="email"><br>
                    <span class="hidden" id="mail"></span>
                </div>
                <div>
                    <label>Mobile:</label>
                    <input type="text" id="mobile" name="mobile"><br>
                    <span class="hidden" id="mob"></span>
                </div>
                <div>
                    <label>Address:</label> <textarea name="address" id="address" rows="10" cols="30"></textarea><br/>
                    <span class="hidden" id="add"></span>
                </div>

                <div>

                    <label>Gender:</label><input type="radio" id="gender"  name="gender" value="male"> Male
                    <input type="radio" id="gender" name="gender" value="female"> Female<br>
                    <span class="hidden" id="gen"></span>
                </div>
                <div>
                    <label>Date of Birth:</label><input type="date" name="dob" id="dob">
                    <span class="hidden" id="dobi"></span>
                </div>
                <div>
                    <label>Image:</label><input type="file" name="pic">

                </div>
                <input type="submit" name="reg" value="submit" id="submit">
            </div>

        </form>
    </body>
</html>




