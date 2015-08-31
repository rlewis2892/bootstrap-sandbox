<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;

/*set page title here*/
$PAGE_TITLE = "Bootstrap Sandbox";

require_once("lib/template/head-utils.php");
?>

<!--include the <head> tag-->
<?php require_once("lib/template/head-utils.php"); ?>

<!--include <header> tag-->
<?php require_once("lib/template/header.php"); ?>

	<div class="container">
		<!--I put the welcome message on top - full width-->
		<div class="row welcome-msg">
			<div class="col-xs-12">
				<h2>Products</h2>
				<p>Flannel listicle biodiesel put a bird on it Helvetica. Craft beer +1 selvage, artisan occupy Etsy health goth mumblecore YOLO heirloom wayfarers slow-carb chambray fingerstache. Health goth synth viral messenger bag Pinterest, artisan YOLO selfies pug ugh. Tote bag selvage skateboard kale chips. Skateboard polaroid typewriter, cold-pressed Helvetica tousled roof party retro butcher crucifix pop-up salvia. Brooklyn cold-pressed whatever sartorial, butcher skateboard deep v pug typewriter four dollar toast actually flexitarian beard heirloom organic. Health goth wolf wayfarers, quinoa cornhole Vice tattooed Carles selvage.</p>
				<p>See <a href="http://getbootstrap.com/components/#thumbnails-custom-content" target="_blank">Bootstrap Images Custom Content</a> documentation for reference on this layout.</p>
			</div>
		</div>
		<hr>
		<!--i created a page with all the product items here-->
		<?php require_once("lib/template/products.php"); ?>

		<!--google custom search here-->
		<h3>Google Custom Search</h3>
		<div class="gse-wrap">
			<script>
				(function() {
					var cx = '009358953223849865007:rd-syvhf6vw';
					var gcse = document.createElement('script');
					gcse.type = 'text/javascript';
					gcse.async = true;
					gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
						'//cse.google.com/cse.js?cx=' + cx;
					var s = document.getElementsByTagName('script')[0];
					s.parentNode.insertBefore(gcse, s);
				})();
			</script>
			<gcse:search></gcse:search>
		</div>
	</div><!--.container-->
</div><!--.site-content-->

<!--footer include-->
<?php require_once("lib/template/footer.php"); ?>

</body>
</html>