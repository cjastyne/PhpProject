<?php
		session_start();
	require_once 'user-db.php';
	require_once 'holiday-db.php';
	if(!isset($_SESSION['islogin']))
	{
		header('location: loginpage.php');
		exit();
	}
	if($_SESSION['user']=="admin")
	{
	
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
	}
	else
	{
		header('location: loginpage.php');
		exit();
	}
?>
<html>
	<?php include 'adminindex-temp.php'; ?>
	
	
<div class="well"style="position:fixed; width:400px; background-color:whitesmoke; margin-top:30px;margin-left:200px;">

<h1>Add a Holiday</h1>
<hr>
<form method="post">
<label>Holiday Name</label>
<input type="text" name="name" class="form-control"/> </br>
<label>Date</label>
				<table>
				<tr><td width="150px"><select class="form-control"name="month">
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
							
							<td width="30px"><label></label></td>
							<td width="50px"><label> day</label></td>
							<td width="100px"><input class="form-control" type="number" name="day" placeholder="Day" max="31" min="1" required /></td>
							<td width="30px"><label></label></td>
							<td width="50px"><label> year</label></td>
						<td width="100px"><input class="form-control" type="number"	name="year" placeholder="Year" min="1901" required /></td>
					</tr>
					</table>	
					</br>
<label>Place</label>
<input type="text" name="place" class="form-control"/> <br>

<label>Description</label><br>
<textarea class="form-control" placeholder="description" name="description"></textarea>
<div style="color:red;"><?php if(isset($_POST['add'])){	echo $msg;} ?> </div>
		
<hr>
<button class="btn btn-primary" name="add">Add</button></a>

</form>
</div>
<div class="well"style="position:absolute; background-color:whitesmoke; margin-top:30px;margin-left:650px;">
<h1>HOLIDAYS</h1>

	<?php foreach(holiday_list() as $h){ ?> 
	<div style=" background-color:skyblue; width:550px;margin-left:50px; margin-top:-0px;">
	<h3><?php echo $h['name'];?></h3></br>
	<small><?php echo $h['date'];?> <b><?php echo $h['place'];?></b></small>
	<p><?php echo $h['description'];?></p>
	</div>
	<a href="#">delete </a>|
	<a href="#">edit </a>
	<hr>
	
	<?php } ?>

</html>



