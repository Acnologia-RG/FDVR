<section>
	<h3>login</h3>
	<form action="<?= URL ?>fdvr/login" method='POST'>
		<label for="name">name</label>
		<input class="text" type="text" min="2" maxlength="16" size="18" required name="name"><br>
		<label for="password">password</label>
		<input class="text" type="password" min="2" maxlength="40" size="42" required name="password"><br>
		<input class="btn btn-secondary" type="submit" value="Login">
	</form>
</section>
<br><br>

<section>
	<h3>register</h3>
	<form action="<?= URL ?>fdvr/register" method='POST'>
		<label for="name">name</label>
		<input class="text" type="text" min="2" maxlength="16" size="18" required name="name"><br>
		<label for="password">password</label>
		<input class="text" type="password" min="2" maxlength="40" size="42" required name="password"><br>
		<label for="password">confirm password</label>
		<input class="text" type="password" min="2" maxlength="40" size="42" required name="confirm_password"><br>
		<input class="btn btn-secondary" type="submit" value="Register">
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