
<h1>welcome to the FDVR home page</h1>

<?php 
if (!$_SESSION == null) {
echo "<p>welcome " . $_SESSION["name"] . "</p>";
}
?>
<section id=left>
	<h2>latest page updates</h2>
<?php
//var_dump($updates[0]);
foreach ($updates[0] as $update){ ?>

	<p> <span><?=$update['name']?></span> last updated at <?=$update["created_at"]?></p>
<?php }; ?>

</section>

<section id=right>
	<h2>latest paragraph updates</h2>
<?php
//var_dump($updates[0]);
foreach ($updates[1] as $update){ ?>

	<p> <span><?=$update['title']?></span> <br> last updated at  <?=$update["created_at"]?></p>
<?php }; ?>