<?php 
session_start();
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
			<?php foreach ($pages as $page) { ?>
				<li><a href="<?= URL . "fdvr/content/" . $page["ID"]; ?>"><?= $page["name"] ?></a></li>

			<?php } if ($_SESSION == null) { ?>
			<li><a href="<?= URL ?>fdvr/registerAndLogin">register/Login</a></li>
			<?php } else if (!$_SESSION == NULL){ 
				if ($_SESSION["power"] === '1') { ?>
				<li><a href="<?= URL ?>admin/showCreatePage">create</a></li>

				<?php } ?>

			<li><a href="<?= URL ?>fdvr/logout">logout</a></li>
			<?php } ?>
		</ul>
	</nav>