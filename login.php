<!DOCTYPE html>
<html>
    <head>
        <style>
        #form {
		border: 1px solid #999;
		padding: 0.25em;
		background: pink;
                width: 500px;
                margin:100px 50px 100px 600px;
                height: 190px;

	}
	
	div {
		padding-bottom: 0.98em;
                padding-top: 25px;
                align-content: center;
	}
	
	
	label {
		float: left;
		width: 6em;
		text-align: right;
		padding-right: 0.5em;
                text-align: center;
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
	</style> 
        
    </head>
    <body>
        <h3 style="text-align:center">Login Form</h3>
                      
        <div id="form">
            <form action="loginverify.php" method="post">
                          
                         <div>
                             <label>Username:</label>
                             <input type="text" id="name" name="name" required><br>
                         </div>
                         <div>
                             <label>Password:</label>
                             <input type="password" id="password" name="password" required><br>
                         </div>
                        <button class="login">Login</button>
            </form>
        </div>
    </body>
</html>