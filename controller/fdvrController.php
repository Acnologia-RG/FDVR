<?php
// makes the fdvrModel.php available from this controller
require(ROOT . "model/fdvrModel.php");

// shows the user the home page
function index()
{
	$pages = getPages();
	render("home", array(
		'pages' => $pages));
}
// shows the user the registerAndLogin page
function registerAndLogin() 
{
	$pages = getPages();
	render("registerAndLogin", array(
		'pages' => $pages));
}
// logs in the user and sets their name and power in the session
function login()
{
	$name = isset($_POST["name"]) ? $_POST["name"] : null;
	$password = isset($_POST["password"]) ? $_POST["password"] : null;

	$result = loginModel($name, $password);
	if (!$result == null) {
		session_start();
		$_SESSION["name"] = $result["name"];
		$_SESSION["power"] = $result["admin_power"];
		header("location:" . URL . "fdvr/index");
		exit();
	} else {
		error_db();
		exit();	
	}
}
// registers the user and then logs them in
function register()
{
	$name = isset($_POST["name"]) ? $_POST["name"] : null;
	$password = isset($_POST["password"]) ? $_POST["password"] : null;
	$confirm_password = isset($_POST["confirm_password"]) ? $_POST["confirm_password"] : null;

	if (registerModel($name, $password, $confirm_password)) {
		login();
	} else {
		error_db();
		exit();
	}
}
// empties out all the session data and then ends the session as a whole
function logout()
{
	session_start();
	session_unset();
	session_destroy();
	header("location:" . URL . "fdvr/index");
	exit;
}
// shows the requested page with all of its content
function content($id)
{
	$pages = getPages();
	$content = getContent($id);
	render("content", array(
		'content' => $content,
		'pages' => $pages));
}