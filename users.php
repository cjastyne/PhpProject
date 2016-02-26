<?php 
	session_start();
	require_once 'user-db.php';


?>

<html>
	<?php include 'adminindex-temp.php'; ?> 
<div class="well"style="position:absolute; width:1130px; background-color:whitesmoke; margin-top:30px;margin-left:200px;">

<h1>List of Users</h1>
<hr>
	<div><table class="table table-hover">
	<tr><th>Id</th><th>Username</th><th>Password</th><th>Name</th><th>age</th><th>Birthday</th><th>Address</th></tr>
	<?php foreach(user_list() as $u) { ?>
	<tr><td><?php echo $u['id'] ; ?></td>
		<td><?php echo $u['username'] ; ?></td>
		<td><?php echo $u['password'] ; ?></td>
		<td><?php echo $u['name'] ; ?></td>
		<td><?php echo $u['age'] ; ?></td>
		<td><?php echo $u['birthdate'] ; ?></td>
		<td><?php echo $u['address'] ; ?></td>
		</tr>
	<?php } ?>
	</table>
</div>
</div>
</html>