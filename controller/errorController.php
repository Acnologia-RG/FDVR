<?php

function error_404()
{
	$Err = "404 - the requested route is not available.";
	render("error", array(
		"Err" => $Err)
	);
}

function error_db()
{
	$Err = "error_db - the database ran into an error";
	render("error", array(
		"Err" => $Err)
	);
}

function input($Err)
{
	render("error", array(
		"Err" => $Err)
	);
}

