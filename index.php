<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;

/*set page title here*/
$PAGE_TITLE = "Bootstrap Sandbox";

require_once("lib/template/head-utils.php");
?>

<!--include the <head> tag-->
<?php require_once("lib/template/head-utils.php"); ?>

	<header>
		<?php require_once("lib/template/header.php"); ?>
	</header>

	<main class="container">
		<div class="row">

			<!--side panel here-->
			<div class="col-md-4">
				<?php require_once("lib/template/side-panel.php"); ?>
			</div>

			<!--main content area-->
			<div class="col-md-8">
				<h2>This is the Main Panel</h2>
			</div>

		</div>
	</main>

</div><!--.sfooter-content-->

<footer class="footer">
	<?php require_once("lib/template/footer.php"); ?>
</footer>

</body>
</html>