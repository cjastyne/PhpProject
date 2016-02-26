<?php
	session_start();
	require_once 'user-db.php';
	require_once 'holiday-db.php';
	if(!isset($_SESSION['islogin']))
	{
		header('location: loginpage.php');
		exit();
	}
	
	if(isset($_POST['cancel']))
	{
		header('location:aprofile.php');
		exit();
		
	}
	
	$id = $_GET['id'];
	$us = user_find($id);
	if(!$us)
	{
		echo "USER not found.";
		exit();
	}

	if(isset($_POST['signup']))
	{
		$new_user = trim($_POST['username']);
		$new_name = trim($_POST['fname']). " " . trim($_POST['mname']). " " .trim($_POST['lname']);
		$new_email = trim($_POST['email']);
		$new_pass = trim($_POST['password']);
		$new_bdate = trim($_POST['bday']);
		$new_age = trim($_POST['age']);
		$new_add = trim($_POST['add']);
		
		if(isset($_POST['update']))
		{
			user_update($id, $new_name, $new_email, $new_password, $new_address, $new_birthdate, $new_age );
			header('location: aprofile.php');
			exit();
			}
	}
		
	

	


?>


<html>

<body>
	
	<?php include 'adminindex-temp.php';		?>

	
	<div class="well" style="margin-left:530px; margin-top:10px; width:500px; position:absolute;">
	
	
	</br>
	</br>
	</br>
	</br>
		
	<form method="post">
						<table>
						<tr>
							<td width="100px"><label>Username</label></td>
							<td width="350px"><input type="text"	class="form-control" name="username" placeholder="<?php echo htmlentities($us['username']); ?>" required /></td>
							<td></td>
						</tr>	
						</table></br>
						<table>
						<tr>
							<td width="100px"><label>Name</label></td>
							<td width="350px"><input class="form-control" type="text"	name="name" placeholder="<?php echo htmlentities($us['name']); ?>" required /></td>
						</tr>
							
						</table></br>
						<table>
						<tr>
							<td width="100px"><label>Email</label></td>
							<td width="350px"><input class="form-control" type="email"	name="email" placeholder="<?php echo htmlentities($us['email']); ?>" required /></td>
							<td></td>
						</tr>	
						</table></br>
						<table>
						<tr>
							<td width="100px"><label>Password</label></td>
							<td width="350px"><input class="form-control" type="password"	name="password" placeholder="<?php echo htmlentities($us['password']); ?>" required /></td>
						</tr>	
						</table></br>
						<table>
						<tr>
							<td width="100px"><label>Birthday</label></td>
							<td width="350px"><input class="form-control" type="text"	name="bday" placeholder="<?php echo htmlentities($us['birthdate']); ?>" required /></td>
						</tr>	
						</table></br>
						<table>
						<tr>		
							<td width="100px"><label>Age</label></td>
							<td width="350px"><input class="form-control" type="number"	name="age" value="<?php echo htmlentities($us['age']); ?>" required /></td>
						</tr>	
						</table></br>
						<table>
						<tr>
							<td width="100px"><label>Address</label></td>
							<td><input class="form-control" type="text"	name="add" placeholder="<?php echo htmlentities($us['address']); ?>" required /></td>
							<td width="50px"></td>
							<td><button class="btn btn-primary" name="update"><b>UPDATE</b></button></td>
							<td><button class="btn btn-primary" name="cancel"><b>CANCEL</b></button></td>
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
	<label style="color:white;font-size:20px;"><b>UPDATE ACCOUNT</b></label>
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