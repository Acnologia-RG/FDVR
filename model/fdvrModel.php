<?php

// DataBase settings
define('DB_TYPE', 'mysql');			// What kind of DataBase type
define('DB_HOST', '127.0.0.1'); 	// What is the IP address (127.0.0.1 is my own PC)
define('DB_NAME', 'to-do_list'); 	// What is the DataBase name
define('DB_USER', 'root'); 			// What is the DataBase user name
define('DB_PASS', 'school');		// What is the DataBase password
define('DB_CHARSET', 'utf8'); 		// which characterset is being used

// opens the DataBase connection
function openDataBaseConnection() 
{
	$options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
	
	$db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASS, $options);

	return $db;
}


function register()
{
	$db = openDatabaseConnection();
	$sql = "INSERT INTO `users`(`name`, `password`, `email`) VALUES (:name, sha1(:password), :email)";

	$query = $db->prepare($sql);
	$query->execute(array(
		":name" => $name,
		":password" => $password,
		":email" => $email
	));

	$db = null;

	return $query->fetchAll();
}