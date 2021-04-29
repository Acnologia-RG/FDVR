<?php
// makes the fdvrModel.php and errorController.php available from the controller
require(ROOT . "model/fdvrModel.php");
require(ROOT . "controller/errorController.php");

// puts together a page by putting the requested page between the header and footer, and sends the date variables with it if there are any
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
// shows the user the home page
function index()
{
	render("home");
}
// shows the user the info page
function info() {
	render("info");
}
// shows the user the registerAndLogin page
function registerAndLogin() {
	render("registerAndLogin");
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
// shows the create page
function createPage()
{
	render("create");
}