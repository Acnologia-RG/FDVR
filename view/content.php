<section>
<?php
//var_dump($content[0]);
if (isset($_SESSION["power"]) == 1) { ?>
	<a href="<?= URL ?>admin/showEditPage/<?=$content[0]["ID"]?>" target="_blank">edit <?= $content[0]["name"] ?></a><br>
	<a href="<?= URL ?>admin/delete/<?=$content[0]["ID"]?>" target="_blank">delete <?= $content[0]["name"] ?></a><br><br>
<?php }
foreach ($content as $paragraph){
	if ($paragraph["paragraph_visible"] || isset($_SESSION["power"]) == 1 && !$paragraph["title"] == null) {
		echo "<h2>".$paragraph["title"]."</h2>";
		echo "<p>".$paragraph["content"]."</p>";
		if (isset($_SESSION["power"]) == 1) { ?>
			<a href="<?= URL ?>admin/showEditParagraph/<?= $paragraph["id"] ?>" target="_blank">edit <?= $paragraph["title"] ?></a><br>
			<a href="<?= URL ?>admin/delete/<?= $paragraph["id"] ?>" target="_blank">delete <?= $paragraph["title"] ?></a>
			<br><br><br>
	<?php }
	}
}
?>
</section>