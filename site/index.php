<?php
session_start();
if(isset($_SESSION['id'])){
	$id = $_SESSION['id'];
	ini_set('session.gc_maxlifetime', 60 * 1);
}
else
	header("location:../../index.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Developer</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-witdth,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="site.css">
</head>
<body>
<div class="main"><!-- main acting as container -->
	<header>
		<div id="title">
			<h1>Maximum Developers</h1>
		</div>
		<nav>
			<a href="style.php" class="nav"> Shelved Software</a>
		 	<a href="style.php">System's Experts</a>
		 	<a href="style.html" class="nav">Developers</a>
		 	<a href="logout.php" id="nav-last">LOGOUT</a>
		 </nav>
	</header>
	<aside>
		<h3><p style="text-transform: uppercase;text-decoration: underline;color:green">
			 		what we do
			 			</p>
			 		</h3>
					We are software developers who does real coding without using such templates like CMS, wordpress among others. We do systems analysis, design and development among othes.
					<p>We use the following languages:</p>
					<ol type="a">
						<li><p style="color: blue;">Java </p></li>
						<li><p style="color: grey;">javascript</p></li>
						<li><p style="color: brown;">PHP </p></li>
						<li>C++</li>
					</ol>
					<p>And the following markup languages:</p>
					<ul type="square">
						<li><p style="color: #00FFFF;">CSS3 </p></li>
						<li>HTML5</li>
					</ul>
					<h5>I use the following tools:</h5>
					<ul type="bullet"> 
						<li> <p style="color: #00FFCC;">Sublime Text </p></li>
						<li><p style="color: yellow;"> Eclipse </p></li>
					</ul>
	</aside>
	<section class="content">

		<article id="intro">
			<h3><u>About us</u></h3>
			<p>
				We are Kenyan developers based in  Nairobi city. We do all sort of IT related jobs from computer system maintenance to complex tasts like programming. We are experienced and skillled proffesionals. We also provide site hosting with advanced security and a concrete firewall
			</p>
				<img src="images/lang.png">
			</article>
			<article id="article1">
				<h3><u>About the site</u></h3>
				<p>
					This page has advanced contents of HTML5 which are very good, interesting and much of it pleasing all developers. Hence its a good idea to use them and be resourceful. We recommend that students and also programmers to visit our tutorials and help at our tutorials page: <a href="tutorials.html" title="tutorials and help">Tutorials and Help </a> and start developing dynamic sites.
				</p>
				<img src="images/want.jpeg">
			</article>
			<article id="article2">
		 			<h3><u>Developers</u></h3>
				<p>
					These include CSS3 compactibility. This has improved the styling and rendering of contents on the sites that u browse or visite daily daily. We do appreciate for all of that and start developing fantastic web applications which are responsive and dynamic. Infact webdesigners design(or create) static websites unlike webdevelopers who only made dynamic sites.
				</p>
			</article>
			<article id="article3">
				<h3><u>Java Technologies</u></h3>
				<p>
					Java has evelved evolved over the years and is very desired in making most enterprise applications or systems. It was made by <big> Gosling</big> in 1995. Since then it have developed and we ourselves do alot with it. Hire one of us and you will never regret. From little like apps to enterprise programming. We also develop android apps.
				</p>
				<img src="images/soft.jpeg">
			</article>
	
	</section>
	<footer>
		<div id="contact">
		<h3><u>CONTACT US</u></h3>
		<table id="contact-table">
			<tr>
				<td>cellphone</td>
				<td><p style="color: orange;">+254791309749</p></td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td><p style="color: orange;">maxdev@develop.com</p></td>
			</tr>
			<tr>
				<td>fax</td>
				<td><p style="color: orange;">(0181) 40 81 21</p></td>
			</tr>
			<tr>
				<td>website</td>
				<td><p style="color: orange;">www.maxdev.com</p></td>
			</tr>
		</table>
		</div>
		<div id="terms">
			<h3>Developes</h3>
			<ul type="none">
				<li>How to become a developer</li>
				<li>FAQ</li>
				<li><a href="#terms">Terms and Conditions</a></li><br>
				<li><a href="#policy">Privacy policy</a></li><br>
				<li>&copy; Copyrigt Incorporation, Inc</li><br>
			</ul>
		</div>
		<div id="terms">
				<h3 style="text-transform: uppercase;text-decoration:underline;display: inline-block; ">Developers</h3>
					<ul type="none">
						<li>How to become a developer</li>
						<li>FAQ</li>
						<li><a href="#terms">Terms and Conditions</a></li><br>
						<li><a href="#policy">Privacy policy</a></li><br>
						<li>&copy; Copyrigt Incorporation, Inc</li><br>
					</ul>
				</div>
	</footer>
</div><!--end of main-->
</body>
</html>