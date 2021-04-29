

<section>
	<h3>create page</h3>
	<form action="<?= URL ?>fdvr/" method='POST'>
	<label for="name">name</label>
	<input class="text" type="text" min="2" maxlength="30" size="18" required name="name">
	<input class="btn btn-secondary" type="submit" value="create page">
	</form>
</section>

<section>
	<h3>create paragraph</h3>
	<form action="<?= URL ?>fdvr/" method='POST'>
	<label for="page_id">belongs to what page?</label>
	<?php foreach ($pages as $page) { ?>
	<option value="<?= $page["page_id"] ?>"><?= $page["page_name"] ?></option>
	<?php } ?>

	<label for="name">title</label>
	<input class="text" type="text" min="2" maxlength="30" size="18" required name="name">
	
	<label for="name">context</label>
	<input class="text" type="text" min="2" maxlength="30" size="18" required name="context">
	

	<input class="btn btn-secondary" type="submit" value="create paragraph">
	</form>
</section>