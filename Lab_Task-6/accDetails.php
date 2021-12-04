<?php
    include('./Model/db_config.php');
    session_start();
    $id=$_SESSION['id'];
    $query="SELECT * FROM user WHERE id='$id'";
    $data=get($query);
    $data=$data[0];
    
    $query="SELECT * FROM about_user WHERE id='$id'";
    $data2=get($query);
    $data2=$data2[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
    <?php include('./header.php') ?>
    <div >
        <center>
        <h1>Account Details</h1>

        <h3>Personal Details</h3>
            <table>
                <tr>
           <td><b style="color: red;"> User Name:</td>
            <td><?php echo $data['username'] ?></td>
       </tr>
            <tr>     
           <td><b style="color: red;"> First Name:</td>
           <td><?php echo $data['fname'] ?></td>
        
</tr> 
            <tr>     
           <td><b style="color: red;"> Last Name:</td>
           <td><?php echo $data['lname'] ?></td>
        
</tr> 
            <tr>     
           <td><b style="color: red;"> Email:</td>
           <td><?php echo $data['email'] ?></td>
        
</tr> 
            <tr>     
           <td><b style="color: red;"> Password:</td>
           <td><?php echo $data['password'] ?></td>
        
 
        <tr>
          <td><b style="color: red;"> Account Status:  </td> 
        <td>  <?php echo $data['status'] ?></td> 
       </tr>
</table>
</center>

<center>
<h3>Address Information</h3>

<table>
</tr> 
            <tr>     
           <td><b style="color: red;"> House No:</td>
           <td><?php echo $data2['house'] ?></td>
        
</tr> 
</tr> 
            <tr>     
           <td><b style="color: red;"> Road No:</td>
           <td><?php echo $data2['road'] ?></td>
        
</tr> 
</tr> 
            <tr>     
           <td><b style="color: red;"> Block No:</td>
           <td><?php echo $data2['block'] ?></td>
        
</tr> 
</tr> 
            <tr>     
           <td><b style="color: red;"> Division:</td>
           <td><?php echo $data2['division'] ?></td>
        
</tr> 
</tr> 
            <tr>     
           <td><b style="color: red;"> District:</td>
           <td><?php echo $data2['district'] ?></td>
        
</tr> 
</tr> 
            <tr>     
           <td><b style="color: red;"> Gender:</td>
           <td><?php echo $data2['gender'] ?></td>
        
</tr> 
</tr> 
            <tr>     
           <td><b style="color: red;"> Date of Birth:</td>
           <td><?php echo $data2['birth'] ?></td>
        
</tr> 
</tr> 
            <tr>     
           <td><b style="color: red;"> Phone Number:</td>
           <td><?php echo $data2['phone'] ?></td>
        
</tr> 
</table>
    </div>
</center>
</body>
</html>