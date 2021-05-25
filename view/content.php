<section>
<?php
//var_dump($content[0]);
foreach ($content as $paragraph){
	if ($paragraph["paragraph_visible"]) {
		echo "<h2>".$paragraph["title"]."</h2>";
		echo "<p>".$paragraph["content"]."</p><br>";
	}
}
?>
</section>