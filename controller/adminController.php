<?php
// makes the adminModel.php available from this controller
require(ROOT . "model/adminModel.php");
require(ROOT . "controller/fdvrController.php");

// shows the create page
function showCreatePage()
{
	$pages = getPages();
	render("create", array(
		'pages' => $pages)
	);
}
function createPageControl()
{
	$name = isset($_POST["name"]) ? $_POST["name"] : null;
	$admin = isset($_POST["admin"]) ? $_POST["admin"] : null;
	$visible = isset($_POST["visible"]) ? $_POST["visible"] : null;
	var_dump($name,	$admin,	$visible);

	// go to the just made page
	// content($id)
}
function createParagraphControl()
{
	$page_id = isset($_POST["page_id"]) ? $_POST["page_id"] : null;
	$title = isset($_POST["title"]) ? $_POST["title"] : null;
	$content = isset($_POST["content"]) ? $_POST["content"] : null;
	$order_index = isset($_POST["order_index"]) ? $_POST["order_index"] : null;
	$visible = isset($_POST["visible"]) ? $_POST["visible"] : null;
}