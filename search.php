<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Search | S-Pharm</title>
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
					<li class=""><a href="index.php">Home</a></li>
					<li><a href="services.html">What We Offer</a></li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<!-- <li class="signin"><a href="signin.php">Sign in</a></li> -->
				</ul>
			</nav>
		</div>
	</header>
	<div class="container">
		<h2>Enter a drug name below:</h2>
		<div id="searchform">
			<input type="text" id="drugname" name="searchname"
				placeholder="Enter drug name or drug ingredient, pill imprint, etc...">
			<button id="searchbtn" onclick="fetchDrugDetails(); fetchDrugDosage ()">Search</button>
		</div>

		<hr>

		<div id="searchresult"></div>
		<div id="searchdosage"></div>
		<div id="searchrelated"></div>
	</div>

	<footer>
		<h3>Subscribe to our Newsletter</h3>
		<form id="letter">
			<input type="email" name="letter" placeholder="Enter your email address...">
			<button type="submit" class="btn">Subscribe</button>
		</form>

		<h4 id="copy">&copy; Copyright 2019. Supreme Pharmacy LLC</h4>
	</footer>
</body>

<script src="js/search.js"></script>

</html>