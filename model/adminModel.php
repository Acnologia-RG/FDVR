<?php
function getParagraph($id)
{
	// gets all the paragraph data from the database
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM `paragraphs`
	WHERE `ID` = :id";

	$query = $db->prepare($sql);
	$query->execute();
	$pages = $query->fetch(array(
		":id" => $id
	));
	
	return $paragraphs;
	exit();
}
function createNewPage()
{
	// puts the new page data into the database
	$sql = "INSERT INTO `pages`(`name`, `admin`, `visible`)
	VALUES (:name, :admin, :visible)";

	$query = $db->prepare($sql);
	$query->execute(array(
		":name" => $name,
		":admin" => $admin,
		":visible" => $visible
	));
	$db = null;

	return TRUE;
	exit();
}
function createNewParagraph($page_id, $title, $content, $order_index, $paragraph_visible)
{
	// puts the new paragraph data into the database
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