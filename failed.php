<?php
	session_start();
	require_once 'user-db.php';
	require_once 'holiday-db.php';


?>


<html>
	<?php include 'login-temp.php' ?>
<center>
<div class="well"style="position:absolute; background-color:black; color:white; margin-top:-450px;margin-left:600px;">
<hr>
<h1>SORRY</h1>
<h3>Sign-up failed!</h3>
<h5>Username or Email are already used.</h5>
<hr>
<a href="sign-up.php"><button class="btn btn-primary">Back</button></a>

</center>
</div>
</html>