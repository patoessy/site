<?php
require_once 'magic.php';
session_start();
if (isset($_SESSION['id'])) {
	$id=$_SESSION['id'];
	destroySession();
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Logout | Developers</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device_width, initial scale=1.0" >
</head>
<body style="background-color: #534663;">
<div id="body">
	<h3 style="text-align: center;"><a href="style.php">LOGIN</a></h3>
</div>
</body>
</html>