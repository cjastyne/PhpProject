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
	<?php include 'adminindex-temp.php';	?>
	<div style=" background-color:black; width:500px;color:white; margin-left:250px; margin-top:-0px;">
	<h1>HOLIDAYS</h1>
	</div>
	<?php foreach(holiday_list() as $h){ ?> 
	<div style=" background-color:whitesmoke; width:1000px; margin-left:250px; margin-top:-0px;">
	<h3><?php echo $h['name'];?></h3></br>
	<small><?php echo $h['date'];?> <b><?php echo $h['place'];?></b></small>
	<p><?php echo $h['description'];?></p>
	<a href="edit-holiday.php?id=<?php echo $h['id'];?>">Edit</a>
	<a href="del-holiday.php?id=<?php echo $h['id'];?>">Delete</a>
	</div>
	<?php } ?>
	</table>
	</div>
	
</html>