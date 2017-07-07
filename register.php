<?php
require_once 'site/magic.php';

if(isset($_POST['submit'])	&&
  isset($_POST['username'])	&&
  isset($_POST['number'])	&&
  isset($_POST['password'])	&&
  isset($_POST['age'])		&&
  isset($_POST['email'])	&&
  isset($_POST['confirm'])){
	$name=sanitizeString($_POST['username']);
	$phone=sanitizeString($_POST['number']);
	$pass=sanitizeString($_POST['password']);
	$email = sanitizeString($_POST['email']);
	$age=sanitizeString($_POST['age']);
	$type="inactive";
	if (empty($name) && empty($phone) && empty($pass) && empty($date)) {
		echo "fields are empty";
		header("location:register.html");
	}elseif ($pass !== $_POST['confirm'] && !$pass=="") {
  		echo "Please make sure that the password matches: <a href=index.php>go back</a>";
  		header("location:register.php");
  		exit();
  	}else
		echo "Submitted successfully"."<br>";
		
} else {
	//echo "Please provide all the required details!   <a href='register.html'>Here</a>";
	header("location:register.html");
	exit();
	}
//do verification
	$fail = validateUsername($name);
	$fail .= validate_email($email);
	$fail .= validatePass($pass);
	$fail .= validate_age($age);
	$fail .= ValidatePhone($phone);
	//echo "<br>$email<br>";
	if($fail == ''){
		//echo "<br>Fails is $fail<br>";
		//test if the user exists by testing the no. of rows returned
	$query = "SELECT * FROM users where username='$name'";
	$result = mysqli_query($conn, $query);
	$row=mysqli_num_rows($result);
	//echo "The following no of rows $row were returned <br>";

	$date = date("h:i:ha Y:m:d");
	#if no of rows returned is 0, the user does not exist...add him.
	if($row==0){
			//now add the user to the system.
		$query2=mysqli_query($conn, "
				INSERT INTO `members` 
		(`name`, `phone`, `password`, `date`, `id`, `type`, `email`) VALUES 
		('$name', '$phone', '$pass', '$age', NULL, '$type', '$email')
		");
		if(!$query2){
		die("Members table not affected:".$conn->error."<br>");
			exit();
		}else{
			$query1=mysqli_query($conn, "
						INSERT INTO `users`(`username`, `password`) VALUE
						('$name', '$pass')
							");
				
			if (!$query1){
						echo "INSERT failed: <br>" .
						$conn->error . "<br><br>";
						die("");
			}
			else{
				//echo "Everything was inserted";
				$sspass=$pass;
			}
		}
	}
		//else
			//echo "The username already exists. Reregister again<a href=register.html>here</a><br>";
	}//else
		//echo "<br>Fail 2 is $fail<br>";

//functions to validate data
	function validateUsername($value){
		//echo"usename validation";
		if (strlen($value)<6) {
			return "6 characters are allowed";
		}elseif(preg_match("/[\W]/", $value))
			return "only alphanumerical allowed";
		else
			return "";
	}
	function validatePhone($value){
		//echo "phone vali...";
		if (!preg_match("/[1-9]/", $value)) 
			return "only no's required";
		else
			return 	"";
	}
	function validatePass($value){
		//echo "pass val...";
		if ($value == "") return "No Password was entered<br>";
		else if (strlen($value) < 6)
		return "Passwords must be at least 6 characters<br>";
		else if (!preg_match("/[a-z]/", $value) ||
		!preg_match("/[0-9]/", $value))
		return "Passwords must be alphanumerical<br>";
		return "";
	}
	function validate_age($value){
		//echo "age val...";
		if ($value == "") return "No Age was entered<br>";
		else if ($value < 18 || $value > 110)
		return "Age must be between 18 and 110<br>";
		return "";
	}
		function validate_email($value){
			//echo "email vali...";
		if ($value == "") return "No Email was entered<br>";
		else if (!((strpos($value, ".") > 0) &&
		(strpos($value, "@") > 0)) ||
		preg_match("/[^a-zA-Z0-9.@_-]/", $value))
		return "The Email address is invalid<br>";
		return "";
	}

//echo"$name<br>$pass<br>$phone<br>$email<br>$age<br>$date";

//start the session
$query = "SELECT * FROM users where password='$sspass'";
$result = mysqli_query($conn, $query);
if(!$result){
	die("No query\t" . mysqli_error());
	exit();
}

//test if the query was successful by testing the no. of rows returned
$row = mysqli_num_rows($result);
//echo "Returned these no. of rows: $row \r";
if ($row>0) {	
	while($log= mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
		if($log['username'] = $name){
			$id=$log['id'];
			session_start();
			$_SESSION['id']=$id;
		header("location:../../index.php");
		ini_set(varname, newvalue);
			
	}
 }
}
?>
