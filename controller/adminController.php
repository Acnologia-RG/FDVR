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
// shows the edit page for the requested page
function showEditPage($id)
{
	$pages = getPages();
	$page = getPage($id);
	render("edit", array(
		'page' => $page,
		'editpage' => "page",
		'pages' => $pages)
	);
}
// shows the edit page for the requested paragraph
function showEditParagraph($id)
{
	$pages = getPages();
	$paragraph = getParagraph($id);
	render("edit", array(
		'paragraph' => $paragraph,
		'editpage' => "paragraph",
		'pages' => $pages)
	);
}
// the small control before its send to the model to create the new page
function createPageControl()
{
	$name = isset($_POST["name"]) ? $_POST["name"] : null;
	$visible = isset($_POST["visible"]) ? $_POST["visible"] : null;
	// echo "name = ".$name."<br>";
	// echo "visible = ".$visible."<br>";

	// makes the new page and sends the user to the newly made page
	content(createNewPage($name, $visible));
}
// the small control before its send to the model to create the new paragraph
function createParagraphControl()
{
	$page_id = isset($_POST["page_id"]) ? $_POST["page_id"] : null;
	$title = isset($_POST["title"]) ? $_POST["title"] : null;
	$content = isset($_POST["content"]) ? $_POST["content"] : null;
	$order_index = isset($_POST["order_index"]) ? $_POST["order_index"] : null;
	$visible = isset($_POST["visible"]) ? $_POST["visible"] : null;
	
	// creates the new paragraph and sends the user to the page where its on
	if (createNewParagraph($page_id, $title, $content, $order_index, $visible)) {
		content($page_id);
	} else {
		error_db();
		exit();
	}
}
// the small control before its send to the model to edit the page with the given $id
function editPageControl($id)
{
	$name = isset($_POST["name"]) ? $_POST["name"] : null;
	$visible = isset($_POST["visible"]) ? $_POST["visible"] : null;
	// echo "name = ".$name."<br>";
	// echo "visible = ".$visible."<br>";

	// makes the new page and sends the user to the newly made page
	if (updatePage($id, $name, $visible)) {
		content($id);
	} else {
		error_db();
		exit();
	}
}
// the small control before its send to the model to edit the paragraph with the given $id
function editParagraphControl($id)
{
	$page_id = isset($_POST["page_id"]) ? $_POST["page_id"] : null;
	$title = isset($_POST["title"]) ? $_POST["title"] : null;
	$content = isset($_POST["content"]) ? $_POST["content"] : null;
	$order_index = isset($_POST["order_index"]) ? $_POST["order_index"] : null;
	$visible = isset($_POST["visible"]) ? $_POST["visible"] : null;
	
	// creates the new paragraph and sends the user to the page where its on
	if (updateParagraph($id, $page_id, $title, $content, $order_index, $visible)) {
		content($page_id);
	} else {
		error_db();
		exit();
	}
}
// checks the page with the given ID before sending it to be deleted
function deletePageControl($id)
{
	$id = isset($id) ? $id : null;

	session_start();
	if ($_SESSION["power"] == 1) {
		if (deletePage($id)) {
			header("location:" . URL . "fdvr/index");
		} else {
			error_db();
			exit();
		}
	}
}
// checks the paragraph with the given id before sending it to be deleted
function deleteParagraphControl($id)
{
	$id = isset($id) ? $id : null;

	session_start();
	if ($_SESSION["power"] == 1) {
		if (deleteParagraph($id)) {
			header("location:" . URL . "fdvr/index");
		} else {
			error_db();
			exit();
		}
	}
}