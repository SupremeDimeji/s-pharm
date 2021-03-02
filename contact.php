<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Contact Us | S-Pharm</title>
	<link rel="stylesheet" type="text/css" href="./style/style.css">
</head>

<body>
	<header>
		<div class="container">
			<div id="sitename">
				<h1>S-PHARM</h1>
			</div>
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="services.html">What We Offer</a></li>
					<li><a href="about.html">About Us</a></li>
					<li class="active"><a href="contact.php">Contact Us</a></li>
					<!-- <li class="signin"><a href="signin.php">Sign in</a></li> -->
				</ul>
			</nav>
		</div>
	</header>

	<section id="maincontent">
		<div class="container">
			<article id="col">
				<h1 id="maintitle">Contact Us</h1>
				<form id="mainform" action="custmessage.php" method="POST">
					<label>Name: </label><br> <input type="text" name="custname" placeholder=" Full Name"><br>
					<label>Email: </label><br><input type="email" name="custemail" placeholder=" example@email.com"><br>
					<label>Message: </label><br><textarea name="custmessage" placeholder="Type your message here..."></textarea><br>
					<button type="submit" class="btn">Send</button><br>
				</form>
			</article>
		</div>
	</section>

	<footer>
		<h3>Subscribe to our Newsletter</h3>
		<form id="letter">
			<input type="email" name="letter" placeholder="Enter your email address...">
			<button type="submit" class="btn">Subscribe</button>
		</form>

		<h4 id="copy">&copy; Copyright 2019. Supreme Pharmacy LLC</h4>
	</footer>
</body>

</html>