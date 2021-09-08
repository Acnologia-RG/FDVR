<?php
//var_dump($content[0]);
echo "<h1>".$content[0]["name"]."</h1>";
if (isset($_SESSION["power"]) == 1) { ?>
	<a href="<?= URL ?>admin/showEditPage/<?=$content[0]["ID"]?>">edit <?= $content[0]["name"] ?> page</a><br>
	<a href="<?= URL ?>admin/deletePageControl/<?=$content[0]["ID"]?>">delete <?= $content[0]["name"] ?> page</a><br><br>
<?php }
foreach ($content as $paragraph){
	if ($paragraph["paragraph_visible"] || isset($_SESSION["power"]) == 1 && !$paragraph["title"] == null) {
		echo "<section>";
		echo "<h2>".$paragraph["title"]."</h2>";
		echo "<p>".$paragraph["content"]."</p>";
		if (isset($_SESSION["power"]) == 1) { ?>
			<a href="<?= URL ?>admin/showEditParagraph/<?= $paragraph["id"] ?>">edit <?= $paragraph["title"] ?> paragraph</a><br>
			<a href="<?= URL ?>admin/deleteParagraphControl/<?= $paragraph["id"] ?>">delete <?= $paragraph["title"] ?> paragraph</a>
	<?php } ?>
		</section>
	<?php
	}
}
?>