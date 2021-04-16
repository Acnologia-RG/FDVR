
<h1>welcome to the FDVR home page</h1>

<?php 
if (!$_SESSION == null) {
echo "welcome " . $_SESSION["name"];
}
?>