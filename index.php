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
			<div class="container-fluid">

				<!--I put the welcome message on top - full width-->
				<div class="row welcome-msg">
					<div class="col-xs-12">
						<h2>Welcome!</h2>
						<p>Use the dropdown on the left side of the page to begin your search.</p>
					</div>
				</div>

				<!--I created another row to house the search dropdown, search forms, and output -->
				<div class="row">
					<div class="col-md-3 side-panel-column">
						<?php require_once("lib/side-panel.php"); ?>
					</div>
					<div class="col-md-9">

						<div class="search-form-container col-md-6">
							<!-- START PEOPLE SEARCH -->
							<div id="people-search" class="searchForm">
								<?php require_once("lib/views/people-searchform.php"); ?>
							</div>
							<!--	END PEOPLE SEARCH -->

							<!-- START RESTAURANT SEARCH -->
							<div id="restaurant-search" class="searchForm">
								<?php require_once("lib/views/restaurant-search-view.php"); ?>
							</div>
							<!-- END RESTAURANT SEARCH -->

							<!-- START LOCATION SEARCH -->
							<div id="location-search" class="searchForm">
								<?php require_once("lib/views/locationsearch-view.php"); ?>
							</div>
							<!-- END LOCATION SEARCH -->

							<!-- START PREFERENCES SEARCH -->
							<div id="preference-search" class="searchForm">
								<?php require_once("lib/views/preference-search-form.php"); ?>
							</div>
							<!-- END PREFERENCES SEARCH -->
						</div>

						<!-- SEARCH RESULTS OUTPUT AREA FOR ALL SEARCH TYPES -->
						<div class="col-xs-12" id="outputArea">
							test test test test test test the output area
						</div>

					</div>
				</div>

			</div>
		</main>

		<!--footer include-->
		<?php require_once("lib/footer.html"); ?>

	</body>
</html>