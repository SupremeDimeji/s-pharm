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
				<h1 id="maintitle" style="color: red;">Sign in Error !</h1>

				<div class="container"><br>

				<?php 
					// Check user login details 

				if(isset($_POST['btn-signin']))
				{
					$uname = $_POST['uname'];
					$pass = $_POST['pass'];

					if(empty($uname) || empty($pass))
					{
						echo '<h3><center>Username/Email and/or Password is empty!</center></h3><br>';
					}
					else 
					{
						$query = " SELECT * FROM users WHERE username='$uname' or email='$uname'";
						$result = mysqli_query($conn,$query);

						if($row=mysqli_fetch_assoc($result))
						{
							$db_pass = $row['password'];
							
							if($pass == $db_pass)
							{
								header("location:stores.php");
							}
							else
							{
								echo '<h3><center>Password is incorrect!</center></h3><br>';	
							}
						}
						else
						{
							echo '<h3><center>Username or Email is incorrect!</center></h3><br>';
						}
					}
				}

			?>

		
		<script type="text/javascript">
			function prevPage() {
				window.history.back();
			}
		</script>

		<center><button class="btn" onclick="prevPage()">Go back</button></center>



			<br><br>
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