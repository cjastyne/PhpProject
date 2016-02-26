<?php
	
	session_start();
	require_once 'user-db.php';
	require_once 'holiday-db.php';

?>


<html>
	 <?php include 'login2-temp.php' ?>
<center>
<div class="well"style="position:absolute; background-color:black; color:white; margin-top:30px;margin-left:570px;">
<hr>
<h1>SUCCESSFUL DEATIVATION!</h1>
<h3>Account no is Deactivated permanently!</h3>
<hr>
<a href="loginpage.php"><button class="btn btn-primary">Home</button></a>

</center>
</div>
</html>