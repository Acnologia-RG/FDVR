
<h1>welcome to the FDVR home page</h1>

<?php 
if (!$_SESSION == null) {
echo "<p>welcome " . $_SESSION["name"] . "</p>";
}
?>