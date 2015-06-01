<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once("lib/head-utils.html"); ?>
		<title>Bootstrap Sandbox</title>
	</head>
	<body class="site">

		<!--header include-->
		<?php require_once("lib/header.html"); ?>

		<main class="site-content">
			<div class="container">

				<!-- **************** -->
				<!--Start Example Here-->
				<!-- **************** -->
				<p>Examine the source code on this page for the sticky footer and jQuery slideToggle.</p>

				<!--This is the clickable question div-->
				<div class="qa-panel" id="question">
					<p>Q: Is there an easy way to do a jQuery slideToggle panel? What the heck? Click me and find out...</p>
				</div>

				<!--This is the answer toggle-->
				<div class="qa-panel" id="answer">
					<p>A: YES! There is!!! :D Just take a look at the code...</p>
				</div>

			</div>
		</main>

		<!--footer include-->
		<?php require_once("lib/footer.html"); ?>

	</body>
</html>