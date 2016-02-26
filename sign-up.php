<?php
	session_start();
	require_once 'user-db.php';
	require_once 'holiday-db.php';
	
	
	$msg='';
	if(isset($_POST['signup']))
	{
		$user = trim($_POST['username']);
		$name = trim($_POST['fname']). " " . trim($_POST['mname']). " " .trim($_POST['lname']);
		$email = trim($_POST['email']);
		$pass = trim($_POST['password']);
		$bdate = trim($_POST['month']). " " . trim($_POST['day']). ", " .trim($_POST['year']);
		$age = trim($_POST['age']);
		$add = trim($_POST['add']);
		
		foreach(user_list() as $u)
		{
			if($user==$u['username'])
			{
			header('location: failed.php');
			exit();
			}
			else if($email==$u['email'])
			{
			header('location: failed.php');
			exit();
			}
			else
			{
			user_add($user, $name, $email, $pass, $add, $age, $bdate);
			$_SESSION['islogin'] = true;
			$name = $u['name'];
			$_SESSION['user'] = $user;
			$_SESSION['pass'] = $pass;
			header('location: confirm.php');
			exit();
			}
		}
		
	}

	


?>


<html>

<body>
	
	<?php include 'signup-temp.php';		?>

	
	<div class="well" style="margin-left:530px; margin-top:10px; width:500px; position:absolute;">
	
	
	</br>
	</br>
	</br>
	</br>
		
	<form method="post">
						<table>
						<tr>
							<td width="100px"><label>Username</label></td>
							<td width="350px"><input type="text"	class="form-control" name="username" placeholder="Username" required /></td>
							<td></td>
						</tr>	
						</table></br>
						<table>
						<tr>
							<td width="100px"><label>Lastname</label></td>
							<td width="350px"><input class="form-control" type="text"	name="lname" placeholder="Name" required /></td>
							</tr>
							<tr>
							<td width="100px"><label>Firstname<label></td>
							<td width="350px"><input class="form-control" type="text"	name="fname" placeholder="Name" required /></td>
							</tr>
							<tr>
							</tr>
							<tr>
							<td width="100px"><label>Middlename</label></td>
							<td width="350px"><input class="form-control" type="text"	name="mname" placeholder="Name" required /></td>
							
							
						</tr>	
						</table></br>
						<table>
						<tr>
							<td width="100px"><label>Email</label></td>
							<td width="350px"><input class="form-control" type="email"	name="email" placeholder="Email" required /></td>
							<td></td>
						</tr>	
						</table></br>
						<table>
						<tr>
							<td width="100px"><label>Password</label></td>
							<td width="350px"><input class="form-control" type="password"	name="password" placeholder="Password" required /></td>
						</tr>	
						</table></br>
						<table>
						<tr>
							<td width="120px"><label>Birthday</label></td>
							<td width="150px"><select class="form-control"name="month">
							<option>Month...</option>
							<option>January</option>
							<option>February</option>
							<option>March</option>
							<option>April</option>
							<option>May</option>
							<option>June</option>
							<option>July</option>
							<option>August</option>
							<option>September</option>
							<option>October</option>
							<option>November</option>
							<option>December</option>
							</select></td>
							
							<td width="50px" align="rigth"><label>day</label></td>
							<td width="100px"><input class="form-control" type="number" name="day" placeholder="Day" max="31" min="1" required /></td>
							<td width="50px"><label>year</label></td>
							<td width="100px"><input class="form-control" type="number"	name="year" placeholder="Year" min="1901" required /></td>
							
						</tr>	
						</table></br>
						<table>
						<tr>		
							<td width="100px"><label>Age</label></td>
							<td width="350px"><input class="form-control" type="number"	name="age" placeholder="Age" value="12" required /></td>
						</tr>	
						</table></br>
						<table>
						<tr>
							<td width="100px"><label>Address</label></td>
							<td><input class="form-control" type="text"	name="add" placeholder="Address" required /></td>
							<td width="50px"></td>
							<td><button class="btn btn-primary" name="signup"><b>Sign Up</b></button></td>
						</tr>
						</table>
	</form>		
						<?php if(isset($_POST['signup'])){?>
						<div>
						<?php global $msg; echo $msg; ?>
						<div>
						<?php } ?>
	</div>
	
	<div class="well" style=" margin-left:530px; margin-top:10px; fixed-top; width:500px; background-color:black; position:absolute;">
	<label style="color:white;font-size:20px;"><b>CREATE AN ACCOUNT</b></label>
	</div>
	
	
</body>
 <div class="container"opacity:.2; min-width:100px; height:40px;">

        <!-- Footer -->
        <footer style="margin-top:650px;background-color:whitesmoke; opacity:.2; min-width:100px; height:40px; margin-left:10px;">

            <center>
                <div class="col-lg-12">
                    <label>Copyright &copy; Hola-Holidays 2015</label>
                </div>
            </center>
        </footer>
    </div>
</html>