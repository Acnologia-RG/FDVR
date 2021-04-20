<?php
// all requests for pages that don't exist come here
function error_404()
{
	$Err = "404 - the requested route is not available.";
	render("error", array(
		"Err" => $Err)
	);
}
// all database errors that have no set error come here
function error_db()
{
	$Err = "error_db - the database ran into an error";
	render("error", array(
		"Err" => $Err)
	);
}
// all input error's come here (example: miss matched username or passwords)
function input($Err)
{
	render("error", array(
		"Err" => $Err)
	);
}

