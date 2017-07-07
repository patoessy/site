<?php
session_start();
if(isset($_SESSION['id'])){
	$id = $_SESSION['id'];
	ini_set('session.gc_maxlifetime', 60 *1);
}
else
	header("location:../../index.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>web developers</title>
</head>
<body>
<header>
	<h1 style="text-align: center;color: red;">DESIGN or DEVELOPMENT</h1>
	<nav style="width: 100%;height: 80px;background-color: #181616;">
		<table cellspacing="2%" cellpadding="5px" align="center">
			<tr>
				<td><a href="index.php">HOME</a></td>
				<td><a href="#dev">Web Development</a></td>
				<td><a href="#design">System Design</a></td>
				<td><a href="#analysis">System Analysis</a></td>
				<td><a href="faq.php">FAQ</a></td>
				<td><a href="logout.php">LOGOUT</a></td>
			</tr>
		</table>
	</nav>

</header>
 <div id="sections" style="width: 90%;background-color: #ffffe0;margin-left: 20px;padding-left: 10px;">
		<article id="dev">
			<h3><u>Web Development</u></h3>
			<p> We do offer wep application development. We use the customers prefered languages and tools as we try all our best in developing the best solutions of the problem. We also go further and also develop apps for the websites. We build good fontend and backend scripts which is the reason you have to develop with us. We go ahead and offer all sort of help and maintenance if required. We finally offer free hosting to our clients with sophisticated security.</p>
			<img src="images/web.jpeg" height="65%" width="50%" style="margin-left: 60px;">
		</article>
		<article id="analysis">
			<h3><u>System Analysis</u></h3>
			<p style="text-indent: 1cm;color: black;">
				We do system analysis for businesses, banks, governments and or organisations. We consider all basic and advanced analysis. we have our strong mechanism of determing the best solutions for any problem. Decide if the already established system is security prone and also wether is customizable. Indeed we offer millenium solutions to information systems.
			</p>
			<img src="images/all.jpeg" height="65%" width="50%" align="center">
		</article>
		<article id="design">
	 			<h3><u>System Design</u></h3>
				<p style="color: black;text-indent: 1cm;">
					System Design is the process or activity of doing the logical and physical design according to the system reguirements. We do sufficient and dependable system design. We consider all the aspects of the system ranging from input to user interfaces. We make sure that the design is what you expect the system to do.
					<img src="images/chart.jpeg" height="65%" width="50%" style="margin-left: 60px;">
				</p>
		</article>
		<article id="article3">
			<h3><u>Java and System Construction</u></h3>
			<p style="color: black;text-indent: 1cm;">
				Java has evelved evolved over the years and is very desired in making most enterprise applications or systems. It was made by <big> Gosling</big> in 1995. Since then it have developed and we ourselves do alot with it. Hire one of us and you will never regret. From little like apps to enterprise programming. We also develop android apps.
			</p>
			<p style="color: black;text-indent: 1cm;">
				Most firms and large companies do trust Java Techonologies. Infact all they do is just hire us and then let us develop the system they want. Is it awesome. We go further and offer some specialised traing to most firm staffs in matters such as security. 
			</p>
			<div style="height:310px;background-color: #ffffe1;display: flex; ">
			<img src="images/soft.jpeg" height="65%" width="49%" style="float: left;">

			<img src="images/java.png" height="65%" width="49%" style="margin-left: 60px;display: inline;float: right;margin-top: 0px;">
			</div>
		</article>
		</div><hr>
	<footer style="width: 100%;height: 50%;background-color: #ffffe1;padding-top: 10px;border: 1px ridge #f8f9ff;">
		<div id="footer" style="clear: both;background-color: #f8f8ff;">
   	<footer>
		<div id="company" style="float: left;">
			<h3><u>Company Information</u></h3>
			<ul type="none">
				<li>About us</li>
				<li>How to become a developer</li>
				<li>Technical support</li>
				<li>Company Overview</li>
			</ul>
		</div>
		<div  id="customer" style="margin-left: 10%;float:left;margin-top: 0px;">
			<h3><u>Customer Support</u></h3>
			<ul type="none">
				<li>Feedback</li>
				<li>Contact Us</li>
				<li>Chat With Us</li>
				<li>Find a Developer</li>
			</ul>
		</div>
		<div id="terms" style="float: right;margin-top: 0px;">
			<ul type="none">
				<li><a href="#terms">Terms and Conditions</a></li><br>
				<li><a href="#policy">Privacy policy</a></li><br>
				<li>&copy; Copyrigt Incorporation, Inc</li><br>
			</ul>
		</div>
	</footer>
  <div style="clear: both;">
	<footer style="height:220px;overflow: auto;clear: both; ">
	 
		<p style="float: left;margin-top: 0px"><small>&copy;Copyright Incorpation,Inc.</small></p>
		<p style="float: right;margin-top: 0px"><a href="contact.html"><small>CONTACT US</small></a></p>
		
	</footer>
  </div>
	</footer>
</body>
</html>