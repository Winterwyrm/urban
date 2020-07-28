<!DOCTYPE HTML>
<!--
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
	<title>Sign Up</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>

	<!-- Header -->
	<header id="header" class="alt">
		<div class="logo"><a href="index.php">Connect<span>ATX</span></a></div>
		<a href="#menu">Menu</a>
	</header>

	<!-- Nav -->
	<nav id="menu">
		<ul class="links">
			<li><a href="index.php">Home</a></li>
			<li><a href="signin.php">Sign In</a></li>
			<li><a href="Cart.php">Cart Ex</a></li>
			<li><a href="BusinessPage.html">Business Ex</a></li>
			<?php include 'backend/display_info.php' ?>
		</ul>
	</nav>

	<!-- Banner -->
	<section id="banner">
		<div class="inner">
			<div class="box-signup">
				<header style="font-size: 60px;">Sign-Up</header>
				<p style="color:black;">Are you a:</p>
				<button class="user" id="userbutton" onclick="displayUserSignin(1)">User</button>
				<button class="business" id="businessbutton" onclick="displayUserSignin(1)">Business</button>
				<form class="User-Signup" method="post" action="/Signup.php" id="user-signup" style="display:none;">
					<div class="inputBox">
						<input type="text" name="name" placeholder="Name" required/>
					</div><br />
					<div class="inputBox">
						<input type="text" name="email" placeholder="Email Address" required/>
					</div><br />
					<div class="inputBox">
						<input type="text" name="username" placeholder="Username" required/>
					</div><br />
					<div class="inputBox">
						<input id="pass" type="password" name="pass" placeholder="Password" required/>
					</div><br />
					<div class="inputBox">
						<input id="confirm_pass" name="confirm" type="password" placeholder="Confirm Password" required/>
					</div><br/>
					<div><?php include 'backend/signup.php'; ?></div>
					<br>
					<input class="submit" type="submit" name="submit" value="Submit"></input>
				</form>
				
			</div>
		</div>
	</section>



	<!-- Footer -->
	<footer id="footer">
		<div class="copyright">
			<ul class="icons">
				<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li>
			</ul>
			<p>&copy; Untitled. All rights reserved. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.</p>
		</div>
	</footer>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>
</html>
