<?php
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
?>
﻿<!DOCTYPE HTML>
<!--
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Search for Products</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
		<header id="header">
			<div class="logo2"><a href="index.php">Connect<span>ATX</span></a></div>
			<div class="search-boxheader">
				<form id="search-form" action="/search.php" method="post">
					<input class="search-txt2" type="text" name="query" placeholder="Type to search" required>
					<a class="search-btn2" href='#' onclick="submit_form('search-form');">
					</a>
				<div class="wrapper-list2">
					<select name="category">
						<option><a href="#">All</a></option>
						<option><a href="#">Product</a></option>
						<option><a href="#">Business</a></option>
					</select>
				</div>
				</form>
			</div>
			<a href="#menu2">Menu</a>
		</header>

		<!-- Nav -->
			<nav id="menu2">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="generic.html">Generic</a></li>
					<li><a href="elements.html">Elements</a></li>
					<?php include 'backend/display_info.php'; ?>
				</ul>
			</nav>

		<!-- Main -->
			<div id="main">

				<section class="wrapper">
					<div class="inner">
						<div class="flex flex-3">
							<?php include 'backend/lookup.php'; ?>
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
