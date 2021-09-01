<?php if ($editpage == "page") { ?>
<section>
<form action="<?= URL ?>admin/editPageControl/<?= $page["ID"] ?>" method='POST'>
	<h2>edit page</h2>
	<div class="row">
		<div class="col-20">
			<label for="name">name</label>
		</div>
		<div class="col-80">
			<input class="text" type="text" min="2" maxlength="30" required name="name"
			value="<?= $page["name"] ?>">
		</div>
	</div>

	<div class="row">
		<div class="col-20">
			<label for="visible">visible to users?</label>
		</div>
		<div class="col-80">
			<label for="1">Yes</label>
			<input <?php if ($page["visible"] == 1) {
				echo "checked";
			} ?> type="radio" name="visible" required value="1">
			<br>
			<label for="0">No</label>
			<input <?php if ($page["visible"] == 0) {
				echo "checked";
			} ?> type="radio" name="visible" value="0">
		</div>
	</div>
	<input type="submit" value="edit page">
</form>
</section>

<?php } elseif ($editpage == "paragraph") { ?>
<section>
	<h2>edit paragraph</h2>
	<form action="<?= URL ?>admin/editParagraphControl/<?= $paragraph["id"] ?>" method='POST'>
	<div class="row">
		<div class="col-20">
			<label for="page_id">belongs to what page?</label>
		</div>
		<div class="col-80">
		<select required name="page_id">
			<?php foreach ($pages as $page) { ?>
			<option <?php if ($paragraph["page_id"] == $page["ID"]) {
				echo "selected";
			} ?> value="<?= $page["ID"] ?>"><?= $page["name"] ?></option>
			<?php } ?></select>
		</div>
	</div>

	<div class="row">
		<div class="col-20">
			<label for="title">title</label>
		</div>
		<div class="col-80">
			<input class="text" type="text" min="2" maxlength="80" required name="title"
			value="<?= $paragraph["title"] ?>">
		</div>
	</div>

	<div class="row">
		<div class="col-20">
			<label for="context">context</label>
		</div>
		<div class="col-80">
			<textarea min="2" required name="content"><?= $paragraph["content"]?></textarea>
		</div>
	</div>
	
	<div class="row">
		<div class="col-20">
			<label for="order_index">order_index</label>
		</div>
		<div class="col-80">
			<input class="text" type="number" min="1" required name="order_index" value="<?= $paragraph["order_index"]?>">
		</div>
	</div>

	<div class="row">
		<div class="col-20">
			<label for="visible">visible to users?</label>
		</div>
		<div class="col-80">
			<label for="1">Yes</label>
			<input <?php if ($paragraph["paragraph_visible"] == 1) {
				echo "checked";
			} ?> type="radio" name="visible" required value="1"></input>
			<br>
			<label for="0">No</label>
			<input <?php if ($paragraph["paragraph_visible"] == 0) {
				echo "checked";
			} ?> type="radio" name="visible" value="0"></input>
		</div>
	</div>
	<input type="submit" value="edit paragraph">
	</form>
</section>
<?php } ?>