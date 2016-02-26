<?php
	session_start();
	
	if(isset($_POST['login']))
	{
		$user = trim($_POST['username']);
		$pass = trim($_POST['password']);
		
		foreach(user_list() as $u)
		{
			if($user==$u['username'] && $pass==$u['password'])
			{
			echo "HALLO";
			exit();
			}
			else
			{
			echo "aii ambot";
			exit();
			}
			
			
		}
		
		
	}


?>

<html>
<head></head>
<body>
	

	<form method="post">
	<label>Username</label>
	<input type="text" name="username" />	
	<label>Password</label>
	<input type="password" name="password" placeholder="Password"/>
	<button name="login">Login</button>
	</form>
	
</body>
</html>