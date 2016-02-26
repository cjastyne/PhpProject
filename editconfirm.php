<?php
	
	session_start();
	require_once 'user-db.php';
	include 'login-temp.php';
	require_once 'holiday-db.php';
	if(!isset($_SESSION['islogin']))
	{
		header('location: loginpage.php');
		exit();
	}
	
	

?>


<html>
	 <?php include 'adminindex-temp.php' ?>
<center>
<div class="well"style="position:absolute; background-color:black; color:white; margin-top:-400px;margin-left:570px;">
<hr>
<h1>UPDATE SUCCESS</h1>
<h3>Holiday was updated</h3>
<hr>
<a href="aholidays.php"><button class="btn btn-primary">Back</button></a>

</center>
</div>
</html>