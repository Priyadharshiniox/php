<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
    </body>

</html>