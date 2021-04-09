<?php 
require(ROOT . "model/fdvrModel.php");

function render($filename, $data = null)
{
	if ($data) {

		foreach($data as $key => $value) {
			$$key = $value;
		}
	} 

	require(ROOT . 'templates/header.php');
	require(ROOT . 'view/' . $filename . '.php');
	require(ROOT . 'templates/footer.php');
}

function index()
{
	render("home", array());
}

function info() {
	render("info", array());
}