<?php
	session_start();
	require_once 'user-db.php';
	if(isset($_SESSION['islogin']))
	{
		header('location: index.php');
		exit();
	}
	
	
	$msg="";
	if(isset($_POST['login']))
	{
		$user = trim($_POST['username']);
		$pass = trim($_POST['password']);
		
		foreach(user_list() as $u)
		{
			if(($user=="admin" && $pass=="ddd"))
			{
				//generate a unique session id
			$name = $u['name'];
			$_SESSION['islogin'] = true;
			$_SESSION['user'] = $user;
			$_SESSION['pass'] = $pass;
			
		
			header('location: adminindex.php');
			exit();
			
			}
			
			if(($user==$u['username'] && $pass==$u['password']))
			{
				//generate a unique session id
			$name = $u['name'];
			$_SESSION['islogin'] = true;
			$_SESSION['user'] = $user;
			$_SESSION['pass'] = $pass;
			
			$details = date(DATE_ATOM)." - $user".'<font color=green><b>'." login ".'</b></font>'."with sessionid=". session_id() . "<br>"; 
			file_put_contents('logs.html', $details, FILE_APPEND);
			
			header('location: index.php');
			exit();
			
			}
			else
			{
				$msg ="Username and Password doesn't match.";
			}
			
			
			
			
			
		}
		
	}


?>

<html>

<body >
	<?php include 'login-temp.php'; ?>
	
	<div class="well" style="margin-left:520px; margin-top:-520px; width:500px; position:absolute;">
	</br>
	</br>
	</br>
	<center>
	still don't have an Account? <a href="sign-up.php" style="text-decoration:none;">Create Now.</a>
	</center><hr>
	<form method="post">
	<table >
		<tr  >
			<td width="100px"><label>Username</label></td>
			<td width="350px"><input type="text" class="form-control" name="username" placeholder="Username"/></td>
		</tr>	
		</table></br>
		<table>
		<tr>
			<td width="100px"><label>Password</label></td>
			<td width="350px"><input type="password" class="form-control" name="password" placeholder="Password"/> </td>
		</tr>
		</table>
		</br>
		<div style="color:red;"><?php if(isset($_POST['login'])){	echo $msg;} ?> </div>
		<hr>
		<center>
		
			<small>
					<a href="#" style="text-decoration:none;">FORGOT PASSWORD? </a>
			</small>
		<font size="5" color="gray"> | </font>
		<label><button class="btn btn-primary" name="login">LOG IN</button></label>
			
			
				
				
		</center>
	
	</form>
	</div>
	<div class="well" style=" margin-left:520px; margin-top:-520px; width:500px; background-color:black; position:absolute;">
	<label style="color:white;font-size:20px;"><b>SIGN IN</b></label>
	</div>
	
        	
					</br>
					</br>
					</br>
	
	
	
	
	<script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

	
	
	</body>
	 

        <!-- Footer -->
        <footer >
            <center>
                <div class="col-lg-12">
                    <label style="color:white;">Copyright &copy; Hola-Holidays 2015</label>
                </div>
            </center>
        </footer>
  
	
	
</html>