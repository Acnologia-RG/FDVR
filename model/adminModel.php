<?php
function getParagraph($id)
{
	// gets all the paragraph data from the database
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM `paragraphs` WHERE `ID` = :id";

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