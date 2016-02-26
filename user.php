<?php

	session_start();
	require_once 'user-db.php';
	require_once 'holiday-db.php';
	if(!isset($_SESSION['islogin']))
	{
		header('location: loginpage.php');
		exit();
	}
?>
<html>
	<?php include 'logged-temp.php';	?>
	<div style=" background-color:whitesmoke; position:relative; heigth:100px; width:1000px; margin-left:250px; margin-top:-550px; min-height:620px;">
	<h1>HOLIDAYS</h1>
	
			
		
	<?php foreach(user_list() as $u){ 
	
	if()
	?> 
	
	
	<table class="table table-hover">
			<tr>
				<td><?php echo $h['Username']; ?></td>
			</tr>
				<tr>
				<td><?php echo $h['description']; ?></td>
				<td><?php echo $h['place']; ?></td>
			</tr>
		</table>
	<?php } ?>
	
	</div>
	
</html>