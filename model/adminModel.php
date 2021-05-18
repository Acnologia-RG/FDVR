<?php
// makes the coreModel.php available from this model
require(ROOT . "model/coreModel.php");

function getPages()
{
	// gets all the page data from the database
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM `pages`";

	$query = $db->prepare($sql);
	$query->execute();
	$pages = $query->fetch();
	
	return $pages;
	exit();
}
function getParagraphs($page_id)
{
	// gets all the paragraph data from the database
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM `paragraphs` WHERE `page_id` = :page_id";

	$query = $db->prepare($sql);
	$query->execute();
	$pages = $query->fetch(array(
		":page_id" => $page_id
	));
	
	return $paragraphs;
	exit();
}
function createNewPage()
{
	// puts the new page data into the database
	$sql = "INSERT INTO `pages`(`name`, `admin`, `visible`) VALUES (:name, :admin, :visible)";

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
function createNewParagraph()
{
	
}