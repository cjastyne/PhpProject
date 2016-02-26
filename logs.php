<?php
		session_start();
	require_once 'user-db.php';
	require_once 'holiday-db.php';
	if(!isset($_SESSION['islogin']))
	{
		header('location: loginpage.php');
		exit();
	}
	
	$msg="";
	if(isset($_POST['add']))
	{
		$hname = trim($_POST['name']);
		$hdate = trim($_POST['month']). " " . trim($_POST['day']). ", " .trim($_POST['year']);
		$place = trim($_POST['place']);
		$desc = trim($_POST['description']);
		
		foreach(holiday_list() as $h)
		{
			if($hname==$h['name'])
			{
			$msg = "Same Holiday Name is already Made.";
			}
			else
			{
			holiday_add($hname, $hdate, $desc, $place);
			header('location: adminindex.php');
			exit();
			}
		}
		
	}

?>
<html>
	<body>
	<?php include 'adminindex-temp.php'; ?>
	
	
<div class="well"style="position:absolute; width:400px; background-color:whitesmoke; margin-top:30px;margin-left:200px;">

<h1>List of Users</h1>
<hr>
	<div><table class="table table-hover">
	<tr><th>Username</th><th>Name</th></tr>
	<?php foreach(user_list() as $u) { ?>
	<tr><td><?php echo $u['username'] ; ?></td><td><?php echo $u['name'] ; ?></td></tr>
	
	<?php } ?>
	</table>
</div>
</div>
<div class="well"style="width:700px; background-color:whitesmoke; margin-top:30px;margin-left:650px;">
<h1>USER's LOGS</h1>
<HR>
	<?php include 'logs.html' ?> 
	<hr>
	<a href="#">Clear Logs</a>
	
</div>
        <footer >
            <center>
                <div class="col-lg-12">
                    <label style="color:white;">Copyright &copy; Hola-Holidays 2015</label>
                </div>
            </center>
        </footer>

</body>

	

</html>



