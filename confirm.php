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
	 <?php include 'holiday-temp.php' ?>
<center>
<div class="well"style="position:absolute; background-color:black; color:white; margin-top:-400px;margin-left:570px;">
<hr>
<h1>CONGRATULATIONS!</h1>
<h3>Sign-up Success!</h3>
<hr>
<a href="index.php"><button class="btn btn-primary">Start</button></a>

</center>
</div>
</html>