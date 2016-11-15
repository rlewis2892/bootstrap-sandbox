<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once("lib/head-utils.html"); ?>
		<title>Flipping Circle Slideshow Demo</title>
	</head>
	<body>

		<!--header include-->
		<?php require_once("lib/header.html"); ?>

		<main>
			<div class="container">

				<div id="fc-slideshow" class="fc-slideshow">

					<ul class="fc-slides">
						<li><img src="http://lorempixel.com/300/300/sports" /><h3>Hot</h3></li>
						<li><img src="http://lorempixel.com/300/300/city" /><h3>Cold</h3></li>
						<li><img src="http://lorempixel.com/300/300/people" /><h3>Light</h3></li>
						<li><img src="http://lorempixel.com/300/300/transport" /><h3>Dark</h3></li>
					</ul>

					<nav>
						<div class="fc-left">
							<span></span>
							<span></span>
							<span></span>
							<i class="icon-arrow-left"></i>
						</div>
						<div class="fc-right">
							<span></span>
							<span></span>
							<span></span>
							<i class="icon-arrow-right"></i>
						</div>
					</nav>

					<div class="fc-flip">
						<div class="fc-front">
							<div><img src="http://lorempixel.com/300/300/business"><h3>Dark</h3></div>
							<div class="fc-overlay-light"></div>
						</div>
						<div class="fc-back">
							<div><img src="http://lorempixel.com/300/300/nightlife"><h3>Soft</h3></div>
							<div class="fc-overlay-dark"></div>
						</div>
					</div>

				</div>

			</div>
		</main>

	</body>
</html>