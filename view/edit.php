<form action="<?= URL ?>admin/createPageControl" method='POST'>
	<div class="row">
		<div class="col-20">
			<label for="name">name</label>
		</div>
		<div class="col-80">
			<input class="text" type="text" min="2" maxlength="30" required name="name"
			placeholder="of the page you want to make">
		</div>
	</div>

	<div class="row">
		<div class="col-20">
			<label for="admin">admin page?</label>
		</div>
		<div class="col-80">
			<label for="1">Yes</label>
			<input type="radio" name="admin" required value="1">
			<br>
			<label for="0">No</label>
			<input type="radio" name="admin" value="0">
		</div>
	</div>

	<div class="row">
		<div class="col-20">
			<label for="visible">visible to users?</label>
		</div>
		<div class="col-80">
			<label for="1">Yes</label>
			<input type="radio" name="visible" required value="1">
			<br>
			<label for="0">No</label>
			<input type="radio" name="visible" value="0">
		</div>
	</div>
	<input type="submit" value="create page">
	</form>

<section>
	<h2>create paragraph</h2>
	<form action="<?= URL ?>admin/createParagraphControl" method='POST'>
	<div class="row">
		<div class="col-20">
			<label for="page_id">belongs to what page?</label>
		</div>
		<div class="col-80">
		<select required name="page_id">
			<?php foreach ($pages as $page) { ?>
			<option value="<?= $page["ID"] ?>"><?= $page["name"] ?></option>
			<?php } ?></select>
		</div>
	</div>

	<div class="row">
		<div class="col-20">
			<label for="title">title</label>
		</div>
		<div class="col-80">
			<input class="text" type="text" min="2" maxlength="80" required name="title"
			placeholder="of the paragraph">
		</div>
	</div>

	<div class="row">
		<div class="col-20">
			<label for="context">context</label>
		</div>
		<div class="col-80">
			<textarea min="2" required name="context"
			placeholder=""></textarea>
		</div>
	</div>
	
	<div class="row">
		<div class="col-20">
			<label for="order_index">order_index</label>
		</div>
		<div class="col-80">
			<input class="text" type="number" min="1" required name="order_index">
		</div>
	</div>

	<div class="row">
		<div class="col-20">
			<label for="visible">visible to users?</label>
		</div>
		<div class="col-80">
			<label for="1">Yes</label>
			<input type="radio" name="visible" required value="1"></input>
			<br>
			<label for="0">No</label>
			<input type="radio" name="visible" value="0"></input>
		</div>
	</div>
	<input type="submit" value="create paragraph">
	</form>
</section>