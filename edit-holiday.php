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
		header('location:aholidays.php');
		exit();
		
	}
	
	$id = $_GET['id'];
	$holi = holiday_find($id);
	if(!$holi)
	{
		echo "Holiday not found.";
		exit();
	}

	$message = '';
	if(isset($_POST['save']))
	{
		$new_name = trim($_POST['name']);
		$new_date = trim($_POST['month'])." ".trim($_POST['day']).", ".trim($_POST['year']);
		$new_place = trim($_POST['place']);
		$new_desc = trim($_POST['description']);
		
			$new_pending = 0;
		holiday_update($id, $new_name, $new_date, $new_desc, $new_place);
		$holi = $_POST;
		header('location: editconfirm.php');
			exit();
	}
	?>

<html>
	<?php include 'adminindex-temp.php'; ?>
	
	
<div class="well"style="position:fixed; width:400px; background-color:whitesmoke; margin-top:30px;margin-left:200px;">

<h1>Edit a Holiday</h1>
<hr>
<form method="post">
<label>Holiday Name</label>
<input type="text" name="name" class="form-control" value="<?php echo htmlentities($holi['name']); ?>"/> </br>
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
							<td width="100px"><input class="form-control" type="number" name="day" placeholder="Day" max="31" min="1"/></td>
							<td width="30px"><label></label></td>
							<td width="50px"><label> year</label></td>
						<td width="100px"><input class="form-control" type="number"	name="year" placeholder="Year" min="1901"/></td>
					</tr>
					</table>	
					</br>
<label>Place</label>
<input type="text" name="place" class="form-control" value="<?php echo htmlentities($holi['place']); ?>"/> <br>

<label>Description</label><br>
<textarea class="form-control" placeholder="<?php echo htmlentities($holi['description']); ?>" name="description"></textarea>
<div style="color:red;"><?php if(isset($_POST['add'])){	echo $msg;} ?> </div>
		
<hr>
<button class="btn btn-primary" name="save">SAVE<button>
</a href="aholidays.php"><button class="btn btn-primary" name="cancel">CANCEL<button></a>

</form>
</div>
</html>


