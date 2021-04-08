<?php
define('DEFAULT_CONTROLLER', 'fdvr');

function route()
{
	$url = splitUrl();

	// if there is no controller in $url['controller'] it will go to the default controller and call the index function there
	if (!$url['controller']) {
		require(ROOT . 'controller/' . DEFAULT_CONTROLLER . 'Controller.php');
		call_user_func('index');

	// if the controller does exist it will load that one
	} elseif (file_exists(ROOT . 'controller/' . $url['controller'] . '.php')) {
		require(ROOT . 'controller/' . $url['controller'] . '.php');

		// in the controller it just loaded it will look for the requested action
		if (function_exists($url['action'])) {

			// if there are parameters it will execute the given action with those parameters
			if ($url['params']) {
				call_user_func_array($url['action'], $url['params']);

			// if there are no parameters it will just execute the given action
			} else {
				call_user_func($url['action']);
			}
		// if the requested action does not exist it will show an error page
		} else {
			require(ROOT . 'controller/ErrorController.php');
			call_user_func('error_404');
		}
	// if the requested controller does not exist it will show an error page
	} else {
		require(ROOT . 'controller/ErrorController.php');
		call_user_func('error_404');
	}
}

function splitUrl()
{
	// if there is something in the key value of $_GET['url'] this gets executed
	if (isset($_GET['url'])) {

		// removes the white spaces and slashes from the start and end if there are any
		$tmp_url = trim($_GET['url'], "/");

		// The FILTER_SANITIZE_URL filter removes all illegal URL characters from a string.
		$tmp_url = filter_var($tmp_url, FILTER_SANITIZE_URL);

		// explode splits the string at / and puts its back into $tmp_url as an array
		$tmp_url = explode("/", $tmp_url);

		// takes the first one from the $tmp_url array and puts it as the controller and the second one as the action
		// in case there is no action it makes index into the action
		$url['controller'] = isset($tmp_url[0]) ? ucwords($tmp_url[0] . 'Controller') : null;
		$url['action'] = isset($tmp_url[1]) ? $tmp_url[1] : 'index';

		// removes those first 2 values from the $tmp_url array as they are now in a new associative array
		unset($tmp_url[0], $tmp_url[1]);

		// takes the remaining variables and puts them into the associative array as parameters 
		$url['params'] = array_values($tmp_url);

		// return the associative array
		return $url;	
	}	
}