﻿<!DOCTYPE HTML>
<!--
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Product</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
		<header id="header">
			<div class="logo2"><a href="index.php">Connect<span>ATX</span></a></div>
			<div class="search-boxheader">
				<input class="search-txt2" type="text" name="" placeholder="Type to search">
				<a class="search-btn2" href='#'>
					<i class="fa fa-search" aria-hidden="true"></i>
				</a>
				<div class="wrapper-list2">

					<select>
						<option><a href="#">All</a></option>
						<option><a href="#">Product</a></option>
						<option><a href="#">Location</a></option>
						<option><a href="#">Business</a></option>
					</select>
				</div>
			</div>
			<a href="#menu2">Menu</a>
		</header>

		<!-- Nav -->
			<nav id="menu2">
				<ul class="links">
					<<li><a href="index.php">Home</a></li>
					<li><a href="signin.php">Sign In</a></li>
					<li><a href="SearchPage ex.php">Browse</a></li>
					<li><a href="Cart.php">Cart Ex</a></li>
					<li><a href="BusinessPage.php">Business Ex</a></li>
					<?php include 'backend/display_info.php' ?>
				</ul>
			</nav>

		<!-- Main -->
			<div id="main">

				<!-- Section -->
				<?php include 'backend/retrieve_product.php'; ?>
			</div>

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
