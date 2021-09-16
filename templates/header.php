<?php 
session_start();
if (!isset($_SESSION["name"])) {
	$_SESSION["name"] = null;
	$_SESSION["power"] = 0;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>FDVR</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= URL ?>css/style.css">
	<meta charset="utf-16">
</head>
<body>
	<nav>
		<ul>
			<li><a href="<?= URL ?>fdvr/index">home</a></li>
			<?php foreach ($pages as $page_nav) { 
				if ($_SESSION["power"] == 1 || $page_nav["visible"] === '1') { ?>
				<li><a href="<?= URL . "fdvr/content/" . $page_nav["ID"]; ?>"><?= $page_nav["name"] ?></a></li>

			<?php }} if ($_SESSION["power"] == 1) { ?>
				<li><a href="<?= URL ?>admin/showCreatePage">create</a></li>
			<?php }
			if ($_SESSION["name"] == null && $_SESSION["power"] == 0) {
				session_unset();
				session_destroy();
			}
			if (!isset($_SESSION["name"])) { ?>
			<li><a href="<?= URL ?>fdvr/registerAndLogin">register/Login</a></li>
			<?php } else { ?>
			<li><a href="<?= URL ?>fdvr/logout">logout</a></li>
			<?php } ?>
		</ul>
	</nav>