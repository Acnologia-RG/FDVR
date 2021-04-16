<?php 
require(ROOT . "model/fdvrModel.php");
require(ROOT . "controller/errorController.php");


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
	render("home");
}

function info() {
	render("info");
}

function registerAndLogin() {
	render("registerAndLogin");
}

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

function logout()
{
	session_start();
	session_unset();
	session_destroy();
	header("location:" . URL . "fdvr/index");
	exit;
}