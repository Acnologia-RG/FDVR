<?php
// gets the requested paragraph
function getParagraph($id)
{
	// gets the requested paragraph data from the database
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM `paragraphs`
	WHERE `id` = :id";

	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id
	));
	$paragraph = $query->fetch();
	
	return $paragraph;
	exit();
}
// gets the requested page data from the database
function getPage($id)
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM `pages`
	WHERE `ID` = :id";

	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id
	));
	$page = $query->fetch();
	
	return $page;
	exit();
}
// creates a new page with the given input
function createNewPage($name, $admin, $visible)
{
	// puts the new page data into the database
	$db = openDatabaseConnection();
	$sql = "INSERT INTO `pages`(`name`, `admin`, `visible`)
	VALUES (:name, :admin, :visible)";

	$query = $db->prepare($sql);
	$query->execute(array(
		":name" => $name,
		":admin" => $admin,
		":visible" => $visible
	));
	$db = null;

	// gets the new page from the database and returns its ID
	$db = openDatabaseConnection();
	$sql = "SELECT ID FROM `pages`
	WHERE `name` = :name LIMIT 1";

	$query = $db->prepare($sql);
	$query->execute(array(
		":name" => $name
	));
	$db = null;

	$page = $query->fetch();

	return $page["ID"];
	exit();
}
// creates a new paragraph with the given input
function createNewParagraph($page_id, $title, $content, $order_index, $paragraph_visible)
{
	// puts the new paragraph data into the database
	$db = openDatabaseConnection();
	$sql = "INSERT INTO `paragraphs`(`page_id`, `title`, `content`, `order_index`, `paragraph_visible`)
	VALUES (:page_id, :title, :content, :order_index, :paragraph_visible)";

	$query = $db->prepare($sql);
	$query->execute(array(
		":page_id" => $page_id,
		":title" => $title,
		":content" => $content,
		":order_index" => $order_index,
		":paragraph_visible" => $paragraph_visible
	));
	$db = null;

	return TRUE;
	exit();
}