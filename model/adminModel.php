<?php
require(ROOT . "model/coreModel.php");

function getPages()
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM `pages`";

	$query = $db->prepare($sql);
	$query->execute();
	$pages = $query->fetch();
	
	return $pages;
	exit();
}
function getParagraphs()
{
	
}
function createPage()
{
	
}
function createParagraph()
{
	
}