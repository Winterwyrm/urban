<!DOCTYPE HTML>
<!--
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Sign In</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="google-signin-client_id" content="349194177305-hsqbtf3gdod0q4ccub0c6m04d6q65a87.apps.googleusercontent.com">
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="https://apis.google.com/js/platform.js" async defer></script>
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.html">Connect<span>ATX</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="generic.html">Generic</a></li>
					<li><a href="elements.html">Elements</a></li>
					<li><a href="signin.php">Sign In</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<div class="box">
						<header>Sign In</header><br />
						<form action="/signin.php" method="post">
							<div class="inputBox">
								<input type="text" name="username" placeholder="Username" required/>
							</div><br/>
							<div class="inputBox">
								<input type="password" name="pass" placeholder="Password" required/>
							</div><br/>
							<div><?php include 'backend/login.php'; ?></div>
							<br>
							<input type="submit" name="submit" value="Submit"/>
						</form><hr/>
						<div align="center" class="g-signin2" data-onsuccess="onSignIn" data-redirecturi="http://localhost:8080"></div>
						<hr />
						<div class="Signup">
							<p style="color:black; font-size: 20px;">Don't have an account?</p><a href="/Signup.php" style="font-size:40px; color: #3498db;">Sign up!</a>
						</div>
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
