<?php 
session_start()
?>
<!DOCTYPE html>
<html>
	<head>
		<title>FDVR</title>	
		<link rel="stylesheet" href="<?= URL ?>css/style.css">
		<meta charset="utf-16">
	</head>
	<body>
	<nav>
		<ul>
		<li><a href="<?= URL ?>fdvr/index">home</a></li>
		<li><a href="<?= URL ?>fdvr/info">info</a></li>
		
		<?php if ($_SESSION == null) { ?>
		<li><a href="<?= URL ?>fdvr/registerAndLogin">register/Login</a></li>
		<?php } ?>

		<?php if (!$_SESSION == null) { ?>
		<li><a href="<?= URL ?>fdvr/logout">logout</a></li>
		<?php } ?>
		</ul>
	</nav>

<!-- to make it dynamic i could put the pages with title and ID into my database and only have 2 standard pages like home and login/register
	<nav>
	<ul>
	 foreach ($pages as $page) {
	

	<li><a href=" URL echo $page["name"]; "
	
	
}
</ul>
</nav>
-->