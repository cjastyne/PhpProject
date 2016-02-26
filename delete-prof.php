<?php 
	session_start();
	require_once 'user-db.php';
	require_once 'holiday-db.php';
	if(!isset($_SESSION['islogin']))
	{
		header('location: loginpage.php');
		exit();
	}
	if(isset($_POST['ok']))
	{
	foreach(user_list() as $u) { 
		
		if($_SESSION['user']==$u['username'])
		{$id= $u['id'];
		
		$details = date(DATE_ATOM)." - $user ".'<font color=red><b>'." ACCOUNT DEACTIVATED  ".'</b></font>'."with sessionid=". session_id() . "<br>"; 
		file_put_contents('logs.html', $details, FILE_APPEND);
		user_delete($id);
			unset($_SESSION['islogin']);
			unset($_SESSION['user']);
	
	//kill the user session
	session_destroy();
	header('location: delconfirm.php');
		
		}
	}
	}
	if(isset($_POST['no']))
	{
		header('location:uprofile.php');
		exit();
	}
?>

<html>
	<?php include 'holiday-temp.php'; ?> 
<center>
<div class="well"style="position:absolute; background-color:black; color:white; margin-top:30px;margin-left:470px;">
<hr>
<h1>ARE YOU SURE TO DEACTIVATE</h1>
<h2>P E R M A N E N T L Y ?</h2>
<hr>
<form method='post'>
<label><button class="btn btn-primary" name="ok">YES</button></label>
<label><button class="btn btn-primary" name="no">NO</button></label>
</form>
<hr>

</center>
</div>
</html>