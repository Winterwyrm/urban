<!DOCTYPE HTML>
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
					<li><a href="generic.html">Generic</a></li>
					<li><a href="elements.html">Elements</a></li>
					<li><a href="signin.php">Sign In</a></li>
					<li><a href="Product.php">Product Page Ex</a></li>
					<li><a href="SearchPage ex.php">Search Ex</a></li>
					<li><a href="BusinessPage.php">Business</a></li>
					<?php include 'backend/display_info.php' ?>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Welcome to Connect<span style="color: #3498db;">ATX</span>!</h1>
						<h2 style="color:white; padding-bottom: 20px; border-bottom: 1px solid white;">Featuring the best of Austin businesses</h2>
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
							<p>All from local Austin businesses.</p>
						</header>
						<div class="flex flex-3">
							<?php
							$conn = mysqli_connect('localhost', 'root', 'c0nn3ctatx123', 'users');
							$query = "SELECT * FROM business";
							$result = mysqli_query($conn, $query);

							for ($i = 0; $i < 6 && $row = mysqli_fetch_array($result); $i++) {
								$encoded_product = urlencode($row["product"]);
								$encoded_business = urlencode($row["business"]);
								echo <<<HERE
								<div class="col align-center">
									<br>
									<div class="image round fit">
										<img src="{$row["image"]}" width="300px" height="300px" alt="" />
									</div>
									<p>{$row["product"]} — \${$row["price"]}</p>
									<a href="Product.php?product={$encoded_product}&business={$encoded_business}" class="button">Learn More</a>
								</div>
								HERE;
							}
							mysqli_close($conn);
							?>
						<!--	<div class="col align-center">
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
							</div>-->
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
