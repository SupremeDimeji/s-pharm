<?php
require_once 'db_conn.php';
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Sign In | S-Pharm</title>
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
					<li class="signin"><a href="signup.php">Sign up</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<section id="maincontent">
		<div class="container">
			<article id="col">
				<h1 id="maintitle">sign in</h1>

				<div class="container">
			<?php
			//Sends Sign up infos to mysql database

				if($_POST){
				$username = $_POST['username'];
				$password = $_POST['password'];
				$storename = $_POST['storename'];
				$email = $_POST['email'];
				$number = $_POST['number'];
				$address = $_POST['address'];
				$storedesc = $_POST['storedesc'];
	
				$sql = "INSERT INTO users (username, password, storename, email, phone, address, storedesc) VALUES ('$username', '$password', '$storename', '$email', '$number', '$address', '$storedesc')";

				if($conn->query($sql) === TRUE) {
					echo "<h3><center>Your account and drug store has been created successfully!</center></h3>";
					echo "<center><p><i>Sign in with your details below.</i></p><hr><br>";
				} else {
					echo "Error: " . $sql . ' ' . $conn->connect_error;
				}

					$conn->close();
				}

			?>
		</div>

				<form id="mainform" action="sign_in.php" method="POST">
					<label>Username or Email: </label><br> <input type="text" name="uname" placeholder=" Username or Email"><br>
					<label>Password: </label><br><input type="password" name="pass" placeholder=" ******"><br>
					<input type="checkbox"> <span style="font-size: 14px;">Remember my login (Private computer
						only!)</span> <br>
					<button type="submit" class="btn" name="btn-signin">Sign in</button><br>
				</form>
				<div style="text-align: center; margin-top: 5px;">Forgot Password? <a href="signup.php">Click Here!</a>
					| Create an Account <a href="signup.php">Here!</a></div>

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