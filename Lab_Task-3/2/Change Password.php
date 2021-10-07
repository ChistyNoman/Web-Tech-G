<?php

$currPass="abc@1234";
$newPass=$rePass="";
$err_npass=$err_rpass="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

if($_POST["currPass"]==$_POST["newPass"]){
$err_npass="New Password should not be same as the Current Password";
}

else if($_POST["newPass"]!=$_POST["rePass"]){
$err_rpass="New Password must match with the Retyped Password";
}
else{
$newPass=$_POST["newPass"];
}
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<fieldset>
<h1><b>Change Password</b></h1>
<table>
<tr>
<td><span>Current Password:</span></td>
<td><input type="Password" name="currPass" value="abc@1234"></td>
</tr>
<tr>

<td><span style="color:blue;">New Password:</span></td>
<td><input type="Password" name="newPass">
<span class="error">*<?php echo $err_npass; ?> </span>
</td></tr>
<tr>
<td><span style="color:violet;">Retype Password:</span></td>
<td><input type="Password" name="rePass">
<span class="error">*<?php echo $err_rpass; ?> </span>
</td>
</tr>

</table>
<br>
<input type="submit" name="submit">
</fieldset>
</form>
</body>
</html>