<?php

function error_404()
{
	echo "404 - the requested route is not available.";
}

function error_db()
{
	echo "error_db - the database ran into an error";
}

function input()
{
	echo $Err;
}