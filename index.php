<!DOCTYPE html>
<html>
	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>VUB Players</title>

		<!-- CSS imports -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/VUBPlayers.css" />

	</head>

	<body>

		<div class="index-wrap">

			<div class="header-logo">
				<?php
					include_once("logo.php");
					display_logo();
				?>
			</div>

			<div class="header-menu">
				<!--Menu-->
				<?php
					include_once "menu.php";
					generate_menu();
				?>
			</div>

			<div class="index-content">
				<div class="container">
					<a href="/">azerty</a>
				</div>
			</div>

		</div>
	</body>

	<script src="js/bootstrap.min.js"></script>

</html>