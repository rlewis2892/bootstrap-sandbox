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

			<!-- side panel here -->
			<div class="col-md-4 hidden-xs hidden-sm">
				<?php require_once("php/template/side-panel.php"); ?>
			</div>

			<!-- main content area -->
			<div class="col-md-8 col-xs-12">
				<main>
					<h2>This is the Main Content Panel</h2>

					<!-- load feed -->
					<?php require_once("php/template/feed.php");?>
				</main>
			</div>

		</div>
	</div>

</div><!--.sfooter-content-->

<footer class="footer navbar-fixed-bottom">
	<?php require_once("php/template/footer.php"); ?>
</footer>

</body>
</html>