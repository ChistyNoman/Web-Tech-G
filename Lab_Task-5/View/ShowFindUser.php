
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border:20px solid white;
		}
	</style>
</head>
<body>

<?php 
    include "show.php";

?>
<legend style="color: red;"><b>Searched Users</b></legend>
<table>
	<thead>
		<tr>
			<th>User ID</th>
			<th>User Name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedUsers as $i => $user): ?>
			<tr>
				<td><a href="../view/Finduser.php ?id=<?php echo $user['ID'] ?>"><?php echo $user['ID'] ?></a></td>
				<td><?php echo $user['username'] ?></td>
				<td><a href="../view/Edituser.php?id=<?php echo $user['ID'] ?>">Edit</a>&nbsp<a href="../view/delete.php?id=<?php echo $user['ID'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>