<?php
// makes the adminModel.php and errorController.php available from this controller
require(ROOT . "model/adminModel.php");
require(ROOT . "controller/errorController.php");

// shows the create page
function createPage()
{
	$pages = getPages();
	render("create", array(
		'pages' => $pages)
	);
}
function createPageC()
{
	
}
function createParagraphC()
{
	
}