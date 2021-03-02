<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Sign Up | S-Pharm</title>
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
					<li><a href="contact.php">Contact Us</a></li>
					<li class="signin"><a href="signin.php">Sign in</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<section id="maincontent">
		<div class="container">
			<article id="col">
				<h1 id="maintitle">sign up</h1>
				<form id="mainform" action="signin.php" method="POST">
					<label>Username: </label><br> <input type="text" name="username" placeholder=" Username" required><br>
					<label>Password: </label><br><input type="password" name="password" placeholder=" ********" required><br>
					<br>
					<p style="border-top: #ccc solid 1px; width: 100%; font-size: 14px; color: rgb(104, 102, 102)">Do you have a drug store? Enter the details below:</p>
					<br>
					<label>Store Name: </label><br> <input type="text" name="storename" placeholder=" e.g. LearnOnICT Med Store"><br>
					<label>Contact Email: </label><br> <input type="email" name="email" placeholder=" example@email.com"><br>
					<label>Phone number: </label><br> <input type="number" name="number" placeholder=" +234"><br>
					<label>Store Address: </label><br> <input type="address" name="address" placeholder=" Store Address"><br>
					<label>Store Description: </label><br><textarea name="storedesc" placeholder="Enter extra details about your drug store here..."></textarea><br>
					<input type="checkbox" required="required"> <span style="font-size: 14px;">By clicking this you
						agree to our terms and conditions</span> <br>
					<button type="submit" class="btn" name="create">Sign up</button><br>
				</form>
				<div style="text-align: center; margin-top: 5px;">Have an Account? <a href="signin.php">Sign in!</a> |
					Create an Account <a href="signup.php">Here!</a></div>
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