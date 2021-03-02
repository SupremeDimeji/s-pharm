<?php
require_once 'db_conn.php';
?>

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
			<?php
			
				if($_POST){
				$custname = $_POST['custname'];
				$custemail = $_POST['custemail'];
				$custmessage = $_POST['custmessage'];
	
				$sql = "INSERT INTO comments (custname, custemail, custmessage) VALUES ('$custname', '$custemail', '$custmessage')";

				if($conn->query($sql) === TRUE) {
					echo "<h3><center>Your message has been sent!</center></h3>";
					echo "<center><p>Your feedback is very important to us.</p> <p>One of our staff will reply to you via the email you provided</p></center><br>";
					echo "<center><a href='contact.php'> Send Another </a>   |   <a href='index.php'> Go Home </a></center>";
				} else {
					echo "Error: " . $sql . ' ' . $conn->connect_error;
				}

					$conn->close();
				}

			?>
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