<?php
require_once 'db_conn.php';
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Registered Stores | S-Pharm</title>
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
					<!-- <li class="signin"><a href="signup.php">Sign up</a></li> -->
				</ul>
			</nav>
		</div>
	</header>

	<section id="maincontent">
		<div class="container">
			<article id="col">
            	<h1 id="maintitle">Registered Drug Stores</h1>
                <p>A<i>ll the stores listed below are verified and accredited drug stores. You can add your store by clicking the button below.</i></p>
                <br>
            <div class="storelist" style="text-align: center;">
            	<table border="1" cellspacing="0" cellpadding="5">
                <thead>
                    <tr>
                        <th>Store Name</th>
                        <th>Store Address</th>
                        <th>Phone Number</th>
                        <th>E-mail</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                	<?php 
                	$sql = "SELECT * FROM users";
                	$result = $conn->query($sql);

                	if ($result->num_rows > 0) {
                		while ($row = $result->fetch_assoc()) {
                			echo "<tr>
                				<td>".$row['storename']."</td>
                				<td>".$row['address']."</td>
                				<td>".$row['phone']."</td>
                				<td>".$row['email']."</td>
                				<td>".$row['storedesc']."</td>
                			</tr>";
                		}
                	}
                	 ?>
                </tbody>
            	</table>
        	</div>
            <br><br>
            <center><a href="signup.php"><button class="btn">Add a Store</button></a></center>
            <br>
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