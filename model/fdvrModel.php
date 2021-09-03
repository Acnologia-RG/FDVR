<?php
// makes the coreModel.php available from this model
require(ROOT . "model/coreModel.php");

function latestUpdates()
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM `pages` 
	WHERE visible = 1 
	ORDER BY `pages`.`updated_at` DESC 
	LIMIT 5";

	$query = $db->prepare($sql);
	$query->execute();
	$pagesresult = $query->fetchAll();

	$sql = "SELECT * FROM `paragraphs` 
	WHERE paragraph_visible = 1 
	ORDER BY `paragraphs`.`updated_at` DESC 
	LIMIT 5";
	
	$query = $db->prepare($sql);
	$query->execute();
	$paragraphsresult = $query->fetchAll();
	$db = null;

	$result = array($pagesresult, $paragraphsresult);
	return $result;
	exit();
}
function registerModel($name, $password, $confirm_password)
{
	// checks if all inputs are filled in
	if ($name === null || $password === null || $confirm_password === null || empty($name) || empty($password) || empty($confirm_password)) {
		$Err = "make sure all input fields are filled in";
		error($Err);
		exit();
	}
	//checks if $name matches with what i want (a to z, A to Z, 0 to 9, _-=+$#! but not spaces and a max length of 16)
	if (!preg_match("/^[\w\-=+$#!]{1,16}$/", $name)) {
		$Err = "Only letters, numbers and _-=+$#! are allowed in your name no spaces";
		error($Err);
		exit();
	}
	// checks if given password matches the confirm_password
	if (!$password === $confirm_password) {
		$Err = "your 'password' does not match the 'confirm password' please make sure and try again";
		error($Err);
		exit();
	}

	$db = openDatabaseConnection();
	$sql = "SELECT * FROM `users`
	WHERE `name` =:name LIMIT 1";

	$query = $db->prepare($sql);
	$query->execute(array(
		":name" => $name
	));
	// checks if there is already a user with the same username
	$result = $query->fetch();
	if ($result["name"] == $name) {
		$Err = "name already exists in the database";
		error($Err);
		exit();
	}
	// puts your username and password into the database
	$sql = "INSERT INTO `users`(`name`, `password`)
	VALUES (:name, sha1(:password))";

	$query = $db->prepare($sql);
	$query->execute(array(
		":name" => $name,
		":password" => $password
	));
	$db = null;

	return TRUE;
	exit();
}
function loginModel($name, $password)
{
	// checks if all inputs are filled in
	if ($name === null || $password === null || empty($name) || empty($password)) {
		$Err = "make sure all input fields are filled in";
		error($Err);
		exit();
	}

	// grabs the data from the user of the given username if there is one
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM `users`
	WHERE `name` = :name LIMIT 1";

	$query = $db->prepare($sql);
	$query->execute(array(
		":name" => $name
	));
	$db = null;

	$result = $query->fetch();
	// checks if there was anyone in the database with the given username 
	if ($result == null || FALSE) {
		$Err = "no user with that username found. make sure you typed it right";
		error($Err);
		exit();
	
	// checks if the user in the DB has the same password as the one given 
	} elseif ($result["password"] == sha1($password)) {
		return $result;
		exit();
	} else {
		$Err = "the password you put in did not match with the password for this user. make sure you put in the right password and try again";
		error($Err);
		exit();
	}

	return FALSE;
	exit();
}
function getContent($id)
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM `pages` 
	left JOIN `paragraphs` ON `pages`.`ID` = `paragraphs`.`page_id`
	WHERE `pages`.`ID` = :id
	ORDER BY `paragraphs`.`order_index`";

	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id
	));
	$db = null;

	$result = $query->fetchAll();

	return $result;
	exit();
}