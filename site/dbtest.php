<?php
$conn = new mysqli(localhost, pat, patopato, school);
if (!$conn) die("Unable");
$email = 'patumusembi70@gmail.com';
$result = mysqli_query($conn, "INSERT INTO 'messages'.'text' values ('$email')");
if (!$result) {
	echo "query not executed".$conn->error;
}
?>