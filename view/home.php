
<h1>welcome <?php 
if (isset($_SESSION["name"])) { 
echo $_SESSION["name"];
} ?> to the FDVR home page</h1>

<section id=left>
	<h2>latest page updates</h2>
<?php
foreach ($updates[0] as $update){ ?>

	<p> <span><?=$update['name']?></span> last updated at <?=$update["created_at"]?></p>
<?php }; ?>

</section>

<section id=right>
	<h2>latest paragraph updates</h2>
<?php
foreach ($updates[1] as $update){ ?>

	<p> <span><?=$update['title']?></span> <br> last updated at  <?=$update["created_at"]?></p>
<?php }; ?>