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
	<?php include 'holiday-temp.php';	?>
	<div style=" background-color:whitesmoke; position:absolute; heigth:100px; width:1000px; margin-left:250px; margin-top:-0px; min-height:620px;">
	<h1>HOLIDAYS</h1>
	<table class="table table-hover">
			<tr>
				<th>NAME</th>
				<th>DESCRIPTION</th>
				<th>DATE</th>
				<th>PLACE</th>
			</tr>
		
	<?php foreach(holiday_list() as $h){ ?> 
			<tr>
				<td><?php echo $h['name']; ?></td>
				<td><?php echo $h['description']; ?></td>
				<td><?php echo $h['date']; ?></td>
				<td><?php echo $h['place']; ?></td>
			</tr>
		
	<?php } ?>
	</table>
	</div>
	
</html>