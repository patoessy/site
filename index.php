<?php
//make connection to mysql
require_once 'site/magic.php';
$pass; $name;

//receive user input and process
if (isset($_POST['submit'])		&&
	isset($_POST['username1'])	&&
	isset($_POST['password1'])) {
	$name=sanitizeString($_POST['username1']);
	$pass=sanitizeString($_POST['password1']);


//make  query
$query = "SELECT * FROM users where password='$pass'";
$result = mysqli_query($conn, $query);
if(!$result){
	die("No query\t" . mysqli_error());
	exit();
}

//test if the query was successful by testing the no. of rows returned
$row = mysqli_num_rows($result);
if ($row>0) {	
	while($log= mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
		if($log['username'] == $name){
			$id=$log['id'];
			session_start();
			$_SESSION['id']=$id;
			ini_set('session.gc_maxlifetime', 60 * 1);
			header("location:../../site");
		}
	}
}else{
		//echo "Please provide valid details ".' <a href="register.html">REGISTER HERE'.'PLEASE</a>';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>DEVELOPER | BLOG</title>
	<link rel="stylesheet" type="text/css" href="index.css">
<style type="text/css">
	a:link {color: #000000}
	a:visited {color: #006600}
	a:hover {color: #FFCC00}
	a:active {color: #FF00CC}
</style>
	<title>MAXIMUM DEVELOPERS</title>
	<script type="text/javascript">
	function validate(form) {
		var fail;
		fail = validateUsername(form.username1.value)
		fail += validatePassword(form.password1.value)
		if (fail == ''){
			var conf = confirm("You are ready browse...Do do want to continue?");
			if(conf == true)
		  	return true;
		  	else return false;
		}
			else { 
				document.getElementById('response').innerHTML="Invalid Details";
				//alert(fail); 
				return false 
			}
	}
	function validatePassword(field){
		if (field == ""  || field.length<6) return "No Password was entered.\n";
			else return '';
	}
	function validateUsername(field){
		if (field == "") return "No Username was entered.\n";
		else return '';
		}
	</script>
</head>
 <body>
 <div id="main">
 	<div id="header">
 		<h2>Maximum Developers
 		 Technologies</h2>
 	</div>
	 <hr>
	 	<p>
	 	You must login to be able to access all the services available.
	 	</p>
	 <hr>
 <div id="login-div">
 	<section>
 		<table id="table1">
 			<form method="post" action="#" onsubmit="return validate(this)">
 			
 			<h3 style="text-transform: uppercase;">
 			<legend style="background-color: blue;border-radius: 5px;color: #fff;margin: 10px;">login</legend>
 			</h3>
 			<div id="response"></div>
 				<tr>
 					<td>Company name</td>
 					<td><input type="text" name="username1" placeholder="username" autofocus="true" ></td>
 				</tr>
 				<tr>
 					<td>Password</td>
 					<td><input type="password" name="password1" autofocus="true" placeholder="Please enter your password"></td>
 				</tr>
 				<tr>
 				<td>
 				<input type="submit" name="submit" value="LOGIN &raquo;">
 				</td>
 				</tr>
 			</form>
 		</table>
 		<table id="table2">
 			<tr>
 				<td><a href="register.html">Register</a></td>
 				<td style="border:none;"><a href="contact.php">Contact Us</a></td>
 				<td><a href="Admin">ADMIN</a></td>
 				<td style="border-left: none;"><a href="pass.php">forgot password?</a></td>
 			</tr>
 		</table>
 	</section>
 	</div><!-- end of section -->
 </div>
</body>
</html>
