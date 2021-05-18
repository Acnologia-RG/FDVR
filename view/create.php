<section>
	<h3>create page</h3>
	<form action="<?= URL ?>admin/createPageControl" method='POST'>
	<label for="name">name</label>
	<input class="text" type="text" min="2" maxlength="30" size="18" required name="name">
	<br><br>

	<label for="admin">admin page?</label><br>
	<input type="radio" name="admin" required value="1">
	<label for="1">Yes</label><br>
	<input type="radio" name="admin" value="0">
	<label for="0">No</label><br>

	<label for="visible">visible to users?</label><br>
	<input type="radio" name="visible" required value="1">
	<label for="1">Yes</label><br>
	<input type="radio" name="visible" value="0">
	<label for="0">No</label><br>

	<input class="btn btn-secondary" type="submit" value="create page">
	</form>
</section>

<?php if (!$pages == NULL) { ?>
<section>
	<h3>create paragraph</h3>
	<form action="<?= URL ?>admin/createParagraphControl" method='POST'>
	<label for="page_id">belongs to what page?</label>
	<?php foreach ($pages as $page) { ?>
	<option value="<?= $page["page_id"] ?>"><?= $page["page_name"] ?></option>
	<?php } ?>

	<label for="title">title</label>
	<input class="text" type="text" min="2" maxlength="30" size="18" required name="title">
	
	<label for="context">context</label>
	<textarea min="2" maxlength="30" size="18" required name="context">
	
	<label for="order_index">order_index</label>
	<input class="text" type="number" min="1" required name="order_index">

	<label for="visible">visible to users?</label><br>
	<input type="radio" name="visible" required value="1">
	<label for="1">Yes</label><br>
	<input type="radio" name="visible" value="0">
	<label for="0">No</label><br>

	<input class="btn btn-secondary" type="submit" value="create paragraph">
	</form>
</section>
<?php } ?>