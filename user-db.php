<?php

function user_db()
{
	$db = new PDO('mysql:/host=localhost;dbname=user-db;', 'root', '');
	return $db;
}

function user_add($username, $name, $email, $password, $address, $age, $birthdate)
{
	$db = user_db();
	$sql = "INSERT INTO user( username, name, email, password, address, age, birthdate) VALUES(?,?,?,?,?,?,?) ";
	$cmd = $db->prepare($sql);
	$cmd->execute(array($username, $name, $email, $password, $address, $age, $birthdate));
	$db = null;
	
	return true;
}

function user_find($id)
{
	$db = user_db();
	$sql = "SELECT * FROM user WHERE id=? ";
	$cmd = $db->prepare($sql);
	$cmd->execute(array($id));
	$row = $cmd->fetch(PDO::FETCH_ASSOC);
	$db = null;
	return $row;
}

function user_update($id, $new_name, $new_email, $new_password, $new_address, $new_birthdate, $new_age )
{
	$db = user_db();
	$sql = "UPDATE user SET name=?, email=?, password=?, address=?, birthdate=?, age=? WHERE id=?";
	$cmd = $db->prepare($sql);
	$cmd->execute(array($new_name, $new_email, $new_password, $new_address, $new_birthdate, $new_age, $id));
	$db = null;	
	return true;
}

function user_delete($id)
{
	$db = user_db();
	$sql = "DELETE FROM user WHERE id=?";
	$cmd = $db->prepare($sql);
	$cmd->execute(array($id));
	$db = null;	
	return true;
}

function user_list()
{
	$db = user_db();
	$sql = "SELECT * FROM user";
	$cmd = $db->prepare($sql);
	$cmd->execute();
	$rows = $cmd->fetchAll(PDO::FETCH_ASSOC);
	$db = null;
	return $rows;
}

//1. test add
//user_add('jmes', 'jas@uuu.com', '12345');

//2. test find
//$holiday = user_find(1);
//print_r($holiday);

//3. test list
//$user = user_list();
//print_r($user);

//4. test update
//user_update(2, 'justin', 'jus@ya.com', '123456');

//user_delete(1);


