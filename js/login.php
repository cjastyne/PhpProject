
<?php
	session_start();
	require_once 'holiday-db.php';
	require_once 'user-db.php';
	
	

	function login($email, $password)
	{
		$success = false;
		$us = user_list();
		for($i = 0; $i<12; $i++)
		{
		$try = user_find(i);
			$em = trim($_POST['$email']);
			$ps = trim($_POST['$password']);
			if(($try['email'] == trim($em))and($try['password'] == trim($ps)))
			{
				$success = true;
				break;
			}
		}

		return $success;
	}
	
	
	$message  = '';
	if(isset($_POST['login']))
	{
		//get the username and password
		$ema = $_POST['email'];
		$pass = $_POST['password'];
		//$keepme = isset($_POST['keepme']);
		
		//validate the username and password
		//if($username=='admin' && $password=='secret')
		if(login($ema, $pass))
		{
			//setcookie("keepme", $keepme);
			setcookie("user", $username);
			//generate a unique session id
			session_regenerate_id();
			
			$_SESSION['islogin'] = true;
			$_SESSION['user'] = $email;
			
			$details = date(DATE_ATOM)." - $username login with sessionid=". session_id() . "\n"; 
			file_put_contents('logs.txt', $details, FILE_APPEND);
			
			//redirect to the main page
			header('location: index.php');
			exit();
		}
		else
		{
			$message = "Username or password is not correct.";
		}		
	}
	else
	{
		if(isset($_COOKIE['keepme']) and $_COOKIE['keepme']==1)
		{
			session_regenerate_id();
			
			$_SESSION['islogin'] = true;
			$_SESSION['user'] = $_COOKIE['user'];
			
		}
	}
?>

<html>
<head>
	<title>HOLA - HOLIDAYS</title>
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/todo.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		
		
        
		<div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php"><font id="fu"><b>HOLA - HOLIDAYS</b></font></a>
            </div>
			
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
			<form class="navbar-form navbar-right" role="search">
				<div class="form-group">
			<form class="form-inline">
			<form method="post">
				  <div class="form-group">
					
					<input type="email" class="form-control" id="exampleInputEmail3" name="email" placeholder="Email">
				  </div>
				  <div class="form-group">
					
					<input type="password" class="form-control" id="exampleInputPassword3" name="password" placeholder="Password">
				  </div>

				  <button type="submit" class="btn btn-default" name="login">Login</button>
			</form>
			</form>
				<div>
					<?php echo $message;?>
				</div>
			</form>				
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
	
	
    </nav><center>
	<div id="content">
	
	<div class="jumbotron" id="fi" >
  <h1> Hello World</h1>
  <p>...</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Register now</a></p>
</div>

	</div></center>
	 <div class="container">
	
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Hola-Holidays 2015</p>
                </div>
            </div>
        </footer>

    </div>

</body>