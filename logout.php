<?php
	//the server reserves a space for the user
	session_start();
	$user = $_SESSION['user'] ;
	
	$details = date(DATE_ATOM)." - $user ".'<font color=red><b>'." logout ".'</b></font>'."with sessionid=". session_id() . "<br>"; 
	file_put_contents('logs.html', $details, FILE_APPEND);
			
	unset($_SESSION['islogin']);
	unset($_SESSION['user']);
	
	//kill the user session
	session_destroy();
	header('location: loginpage.php');
?>