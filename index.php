﻿<!DOCTYPE HTML>
<!--
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>ConnectATX</title>
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
					<li><a href="SearchPage ex.php">Browse</a></li>
					<li><a href="Cart.php">Cart Ex</a></li>
					<li><a href="BusinessPage.html">Business Ex</a></li>
					<?php include 'backend/display_info.php' ?>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Welcome to Connect<span style="color: #3498db;">ATX</span>!</h1>
						<h2 style="color:white; padding-bottom: 20px; border-bottom: 1px solid white;">Slogan</h2>
					</header>
					<div class="search-box">
						<form id="index-form" action="/search.php" method="post">
							<input style="border: 2px solid white;"class="search-txt" type="text" name="query" placeholder="Type to search" required>
							<a class="search-btn" href='#' onclick="submit_form('index-form');">
								<i class="fa fa-search fa-2x" aria-hidden="true"></i>
							</a>
							<div class="wrapper-list">

							<select name="category">
								<option><a href="#">All</a></option>
								<option><a href="#">Product</a></option>
								<option><a href="#">Business</a></option>
							</select>

							</div>
						</form>
					</div>
				</div>
			</section>

		<!-- Main -->
			<div id="main">

				<!-- Section -->
				<section class="wrapper style1">
					<div class="inner">
						<header class="align-center">
							<h2>Browse Popular Products</h2>
							<p>Cras sagittis turpis sit amet est tempus, sit amet consectetur purus tincidunt.</p>
						</header>
						<div class="flex flex-3">
							<div class="col align-center">
								<div class="image round fit">
									<img src="images/pic03.jpg" alt="" />
								</div>
								<p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet. </p>
								<a href="#" class="button">Learn More</a> <br /><br /><br /><br /><br />
							</div>
							<div class="col align-center">
								<div class="image round fit">
									<img src="images/pic05.jpg" alt="" />
								</div>
								<p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet. </p>
								<a href="#" class="button">Learn More</a>
							</div>
							<div class="col align-center">
								<div class="image round fit">
									<img src="images/pic04.jpg" alt="" />
								</div>
								<p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet. </p>
								<a href="#" class="button">Learn More</a>
							</div>

							<div class="col align-center">
								<div class="image round fit">
									<img src="images/pic03.jpg" alt="" />
								</div>
								<p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet. </p>
								<a href="#" class="button">Learn More</a><br /><br /><br /><br /><br />
							</div>
							<div class="col align-center">
								<div class="image round fit">
									<img src="images/pic05.jpg" alt="" />
								</div>
								<p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet. </p>
								<a href="#" class="button">Learn More</a>
							</div>
							<div class="col align-center">
								<div class="image round fit">
									<img src="images/pic04.jpg" alt="" />
								</div>
								<p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet. </p>
								<a href="#" class="button">Learn More</a>
							</div>

							<div class="col align-center">
								<div class="image round fit">
									<img src="images/pic03.jpg" alt="" />
								</div>
								<p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet. </p>
								<a href="#" class="button">Learn More</a>
							</div>
							<div class="col align-center">
								<div class="image round fit">
									<img src="images/pic05.jpg" alt="" />
								</div>
								<p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet. </p>
								<a href="#" class="button">Learn More</a>
							</div>
							<div class="col align-center">
								<div class="image round fit">
									<img src="images/pic04.jpg" alt="" />
								</div>
								<p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet. </p>
								<a href="#" class="button">Learn More</a>
							</div>
						</div>

					</div>
				</section>

			</div>

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
			<script src="assets/js/submit.js"></script>

	</body>
</html>
