<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form method="post" action="../controller/loginCheck.php">
			<center>
    <table border="1" width="500px">
	    <tr>
            <td>
                <table width="500px">
                    <tr>
						<td align="Left">
                <h3><b>XCompany</b></h3>
            </td>

            <td align="Right">
                <a href="../index.php"><b style="color: green;">Home</a> |
                <a href="Login.php"><b style="color: green;">Login</a> |
                <a href="Registration.php"><b style="color: green;">Registration</a>
            </td>
                    </tr>
                    </table>
            </td>
        </tr>

        
        <tr>
            <td colspan="2">
			<fieldset>
			<legend><h4>LOGIN</h4></legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
                
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
                <tr>
                   <td colspan="2"><hr></td> 
                </tr>
					
                <tr>
                    <td>
                        <input type="checkbox" name="remember me" value=""> Remember Me
					</td>
                </tr>

				<tr>
					<td><input type="submit" name="submit" value="Submit"><a href="forgot password.php">Forgot Passwor?</td>
                </tr>
			</table>
            </fieldset>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <center>
                <b style="color: green;">Copyright © 2017
                </center>
            </td>
        </tr>
    </table>
    </center>
		
	</form>
</body>
</html>