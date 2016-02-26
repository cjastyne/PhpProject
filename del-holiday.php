<?php 
	session_start();
	require_once 'holiday-db.php';
	
	if(isset($_POST['ok']))
	{
	foreach(holiday_list() as $h) { 
		
		
		$id = $_GET['id'];
		if($_GET['id']==$h['id'])
		holiday_delete($id);
			
	
	//kill the user session
	
	header('location: aholidays.php');
		exit();
		}
	}
	if(isset($_POST['no']))
	{
		header('location:aholidays.php');
		exit();
	}
	
?>
<html>
	<?php include 'adminindex-temp.php'; ?> 
<div class="well"style="position:absolute; width:1130px; background-color:whitesmoke; margin-top:30px;margin-left:200px;">

<h1>DELETE</h1>
<hr>
	<div><table class="table table-hover">
	<tr><th>Holiday Name</th><th>Date</th><th>Description</th><th>Place</th></tr>
	<?php foreach(holiday_list() as $h) 
	{
		$id = $_GET['id'];
		if($id==$h['id'])
		{
	?>
	<tr>
		
		<td><?php echo $h['name'] ; ?></td>
		<td><?php echo $h['date'] ; ?></td>
		<td><?php echo $h['description'] ; ?></td>
		<td><?php echo $h['place'] ; }}?></td>
		</tr>
	</table>
	
</div>
<center>
<div class="well"style="position:absolute; background-color:black; color:white; margin-top:30px;margin-left:250px;">
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
</div>
</html>