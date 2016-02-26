<?php

function holiday_db()
{
	$db = new PDO('mysql:/host=localhost;dbname=holiday-db;', 'root', '');
	return $db;
}

function holiday_add($name, $date, $description, $place)
{
	$db = holiday_db();
	$sql = "INSERT INTO holidays(name, date, description, place) VALUES(?,?,?,?) ";
	$cmd = $db->prepare($sql);
	$cmd->execute(array($name, $date, $description, $place));
	$db = null;
	
	return true;
}

function holiday_find($id)
{
	$db = holiday_db();
	$sql = "SELECT * FROM holidays WHERE id=? ";
	$cmd = $db->prepare($sql);
	$cmd->execute(array($id));
	$row = $cmd->fetch(PDO::FETCH_ASSOC);
	$db = null;
	return $row;
}

function holiday_update($id, $new_name, $new_date, $new_description, $new_place)
{
	$db = holiday_db();
	$sql = "UPDATE holidays SET name=?, date=?, description=?, place=? WHERE id=?";
	$cmd = $db->prepare($sql);
	$cmd->execute(array($new_name, $new_date, $new_description, $new_place, $id));
	$db = null;	
	return true;
}

function holiday_delete($id)
{
	$db = holiday_db();
	$sql = "DELETE FROM holidays WHERE id=?";
	$cmd = $db->prepare($sql);
	$cmd->execute(array($id));
	$db = null;	
	return true;
}

function holiday_list()
{
	$db = holiday_db();
	$sql = "SELECT * FROM holidays";
	$cmd = $db->prepare($sql);
	$cmd->execute();
	$rows = $cmd->fetchAll(PDO::FETCH_ASSOC);
	$db = null;
	return $rows;
}

//1. test add
//holiday_add('hey', 2015/10/15, 'yeah', 'cebu');

//2. test find
//$holiday = holiday_find(1);
//print_r($holiday);

//3. test list
//$holidays = holiday_list();
//print_r($holidays);

//4. test update
//holiday_update(1, 'yow', 2015-09-07, 'gwapa ko', 'cebu');

///holiday_delete(1);


