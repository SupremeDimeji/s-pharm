<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Supreme Pharmacy | Homepage</title>
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
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="services.html">What We Offer</a></li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<!-- <li class="signin"><a href="signin.php">Sign in</a></li> -->
				</ul>
			</nav>
		</div>
	</header>

	<section id="sitesearch">
		<div class="container">
			<h1>Supreme Pharmacy, LLC</h1>

			<input type="text" placeholder="Click 'Search' to know more about a drug; its active ingredient, dosage, etc..." readonly>
			<button
				style="height: 60px; width: 7%; font-family: Trebuchet MS, Helvetica, sans-serif; font-size: 15px; color: #8f668f; font-weight: bold;"
				onclick="location.href='search.php';">Search</button>

			<!-- <p><i>We have over a thousand genuine medications for any medical conditions, and more is added everyday...</i> -->
			</p>

		</div>
		<!-- <script src="js/search.js"></script> -->
	</section>

	<section id="sitecontent">
		<div class="container">
			<div class="content">
				<img src="img/drugs.png">
				<h2>Drugs and Medications</h2>
				<p>Better health care can save money too!
					Like many Nigerians, you may be concerned about the future of the health care system. "Neque porro
					quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...", translated as;
					"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it
					is pain..." Find out how strengthening primary health care (PHC) can help build a system that
					provides better, <a href="services.html"> more...</a></p>
			</div>
			<div class="content">
				<img src="img/conditions.png">
				<h2>Condition and Diseases</h2>
				<p>Better health care can save money too!
					Like many Nigerians, you may be concerned about the future of the health care system. "Neque porro
					quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...", translated as;
					"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it
					is pain..." Find out how strengthening primary health care (PHC) can help build a system that
					provides better, <a href="services.html"> more...</a></p>
			</div>
			<div class="content">
				<img src="img/treatment.png">
				<h2>Treatment Guides</h2>
				<p>Better health care can save money too!
					Like many Nigerians, you may be concerned about the future of the health care system. "Neque porro
					quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...", translated as;
					"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it
					is pain..." Find out how strengthening primary health care (PHC) can help build a system that
					provides better, <a href="services.html"> more...</a></p>
			</div>
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