<?php 
	session_start();
	require_once 'user-db.php';
?>
<html>
	<?php include 'adminindex-temp.php'; ?> 
<div class="well"style="position:absolute; width:1130px; background-color:whitesmoke; margin-top:30px;margin-left:200px;">

<h1>Profile</h1>
<hr>
	<div><table class="table table-hover">
	<tr><th>Id</th><th>Username</th><th>Name</th><th>age</th><th>Birthday</th><th>Address</th></tr>
	<?php foreach(user_list() as $u) { 
		
		if($_SESSION['user']==$u['username'])
		{$id= $u['id'];
		user_find($id);
	
	?>
	<tr><td><?php echo $u['id'] ; ?></td>
		<td><?php echo $u['username'] ; ?></td>
		<td><?php echo $u['name'] ; ?></td>
		<td><?php echo $u['age'] ; ?></td>
		<td><?php echo $u['birthdate'] ; ?></td>
		<td><?php echo $u['address'] ; ?></td>
		</tr>
	<?php exit(); } }?>
	</table>
</div>
</div>
</html>