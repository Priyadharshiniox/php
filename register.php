<!DOCTYPE html>

<html>
    <head>
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
        </style> 
    </head>
    <body>
        <form action="insert.php" method="post">
            <h3 style="text-align:center">Registration Form</h3>

            <div id="form">

                <div>
                    <label>Name:</label>
                    <input type="text" id="uname" name="uname"><br>
                </div>
                <div>
                    <label>Password:</label>
                    <input type="text" id="password" name="password"><br>
                </div>
                <div>
                    <label>Email:</label>
                    <input type="text" id="email" name="email"><br>
                </div>
                <div>
                    <label>Mobile:</label>
                    <input type="text" id="mobile" name="mobile"><br>
                </div>
                <div>
                    <label>Address:</label> <textarea name="address" id="address" rows="10" cols="30"></textarea><br/>
                </div>

                <div>

                    <label>Gender:</label><input type="radio" id="gender"  name="gender" value="male"> Male
                    <input type="radio" id="gender" name="gender" value="female"> Female<br>
                </div>
                <div>
                    <label>Date of Birth:</label><input type="date" name="dob" id="dob">
                </div>
                <div>
                    <label>Image:</label><input type="file" name="image" id="image" accept="image/*">
                </div>
                <input type="submit" name="reg" value="Register">
            </div>

        </form>
    </body>
</html>




