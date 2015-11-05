<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;

/*set page title here*/
$PAGE_TITLE = "Bootstrap Sandbox";

require_once("php/template/head-utils.php");
?>

<!--include the <head> tag-->
<?php require_once("php/template/head-utils.php"); ?>

	<header>
		<?php require_once("php/template/header.php"); ?>
	</header>

	<div class="container">
		<div class="row">

			<!--side panel here-->
			<div class="col-md-4">
				<?php require_once("php/template/side-panel.php"); ?>
			</div>

			<!--main content area-->
			<div class="col-md-8">
				<main>
					<div class="jumbotron">
						<h2>This is the Main Content Panel</h2>
						<p>This example uses the Owl Carousel plugin, which features lazy-loading JSON functionality.</p>
					</div>

					<!-- load feed carousel -->
					<?php require_once("php/template/carousel.php");?>
				</main>
			</div>

		</div>
	</div>

</div><!--.sfooter-content-->

<footer class="footer">
	<?php require_once("php/template/footer.php"); ?>
</footer>

</body>
</html>