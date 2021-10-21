<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>

<!DOCTYPE html>
<html>

<head>
    <title>Profile Picture</title>
</head>

<body>
    <center>
        <table border="1" width="700px">

            <tr>
                <td colspan="2">
                    <table width="700px">
                        <tr>
                            <td align="Left">
                                <h3><b>XCompany</b></h3>
                            </td>
                            <td align="Right"><b style="color: green;">
                            Logged in as
                                <a href="View Profile.php"><?=$_SESSION['user']['username']?></a> |
                                <a href="../controller/Logout.php"><b style="color: green;">Logout</a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td height="150px" width="200px">
                    <b style="color: violet;">Account<br><hr>
                    <ul>
                        <li><a href="Dashboard.php">Dashboard</a></li>
                        <li><a href="View Profile.php">View Profile</a></li>
                        <li><a href="Edit Profile.php">Edit Profile</a></li>
                        <li><a href="Change Profile Picture.php">Change Profile Picture</a></li>
                        <li><a href="Change Password.php">Change Password</a></li>
                        <li><a href="../controller/Logout.php">Logout</a></li>
                    </ul>
                </td>
                <td>
                <fieldset>
			<legend><b style="color: green;">PROFILE PICTURE</legend>
			<table width="500px">
				<tr>
                    <td><img src="blank-picture-holder.png" alt="profile pic" style="width:100px;height:100px;"align="Left"></td>
				</tr>
                <tr>
                <td><input type="file" id="myfile" name="myfile" multiple></td>
                </tr>
                <tr>
                   <td colspan="2"><hr></td> 
                </tr>
                <tr>
                <td><input type="submit" name="submit" value="Submit">
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
</body>

</html>

<?php
	
	}else{
		header('location: login.php');
	}
?>