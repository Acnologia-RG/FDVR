<section>
	<h3>login</h3>
	<form action="<?= URL ?>fdvr/login" method='POST'>
	<div class="row">
		<div class="col-20">
			<label for="name">name</label>
		</div>
		<div class="col-80">
			<input class="text" type="text" min="2" maxlength="16" size="18" required name="name"
			placeholder="of the user">
		</div>
	</div>
	<div class="row">
		<div class="col-20">
			<label for="password">password</label>
		</div>
		<div class="col-80">
			<input class="text" type="password" min="2" maxlength="40" size="42" required name="password"
			placeholder="your user password">
		</div>
	</div>
	<input type="submit" value="Login">
	</form>
</section>

<section>
	<h3>register</h3>
	<form action="<?= URL ?>fdvr/register" method='POST'>
	<div class="row">
		<div class="col-20">
			<label for="name">name</label>
		</div>
		<div class="col-80">
			<input class="text" type="text" min="2" maxlength="16" size="18" required name="name"
			placeholder="of the user">
		</div>
	</div>
	<div class="row">
		<div class="col-20">
		<label for="password">password</label>
		</div>
		<div class="col-80">
			<input class="text" type="password" min="2" maxlength="40" size="42" required name="password"
			placeholder="the password you want to use">
		</div>
	</div>
	<div class="row">
		<div class="col-20">
		<label for="password">confirm password</label>
		</div>
		<div class="col-80">
			<input class="text" type="password" min="2" maxlength="40" size="42" required name="confirm_password" placeholder="reconfirm the password">
		</div>
	</div>
		<input type="submit" value="Register">
	</form>
</section>


<?php 
// $name = "-=+$#!";
// if (preg_match("/^[\w\-=+$#!]{1,16}$/", $name)) {
// 	echo "dit is oke";
// } else {
// 	echo " NOPE";
// };
// echo "<br>". $name;
?>