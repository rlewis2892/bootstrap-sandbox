<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- The 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- My Custom CSS rlewis37@cnm.edu -->
		<link rel="stylesheet" href="css/style.css" type="text/css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery (required for Bootstap's JS plugins) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<title>Flexbox Columns</title>
	</head>
	<body>
		<header>
			<div class="container">
				<h1>Flexbox Columns Example</h1>
			</div>
		</header>
		<main>
			<div class="container">

				<!-- Instructions -->
				<div class="row">
					<div class="col-xs-12">
						<div class="well">
							<p><strong>Instructions</strong>: View the source code for the CSS, and add the Flexbox Column rules to your stylesheet. Add the class "row-flex" to each row that contains columns that need to be equal height. See Source code below.</p>
							<p>This example is set to work on the <strong>md</strong> Bootstrap breakpoint on up. Adjust the <code>min-width</code> on the @media query if desired.
								<br><strong>View on GitHub</strong>: <a href="https://github.com/rlewis2892/bootstrap-sandbox/tree/flexbox-columns" target="_blank">github.com/rlewis2892/bootstrap-sandbox/tree/flexbox-columns</a></p>
						</div>
					</div>
				</div>

				<!-- Begin Columns Here -->
				<div class="row row-flex">
					<div class="col-md-3">
						<div class="content-box">
							<h4>Riker Ipsum</h4>
							<p>Travel time to the nearest starbase? Fear is the true enemy, the only enemy. Now we know what they mean by 'advanced' tactical training. Flair is what marks the difference between artistry and mere competence. Yes, absolutely, I do indeed concur, wholeheartedly! But the probability of making a six is no greater than that of rolling a seven. Some days you get the bear, and some days the bear gets you. We finished our first sensor sweep of the neutral zone. I've had twelve years to think about it. And if I had it to do over again, I would have grabbed the phaser and pointed it at you instead of them. Earl Grey tea, watercress sandwiches... and Bularian canapés? Are you up for promotion? Not if I weaken first. I guess it's better to be lucky than good.</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="content-box">
							<h4>Kitty Ipsum</h4>
							<p>Burrow under covers jump off balcony, onto stranger's head nap all day meowing non stop for food spread kitty litter all over house. Purr for no reason meow so refuse to drink water except out of someone's glass. Leave dead animals as gifts jump launch to pounce upon little yarn mouse, bare fangs at toy run hide in litter box until treats are fed burrow under covers lay on arms while you're using the keyboard, cat is love, cat is life yet unwrap toilet paper.</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="content-box">
							<h4>Hipster Ipsum</h4>
							<p>Messenger bag food truck brooklyn mumblecore williamsburg, twee blue bottle banjo microdosing chicharrones dreamcatcher church-key hella cliche. Lumbersexual deep v single-origin coffee shabby chic intelligentsia. Mlkshk lo-fi try-hard, tote bag swag seitan celiac tacos.</p>
							<p>iPhone humblebrag crucifix helvetica organic direct trade pickled. IPhone blog small batch, art party post-ironic direct trade keytar butcher. Gluten-free post-ironic chia, tilde deep v brunch ennui shabby chic mumblecore green juice ethical sartorial distillery slow-carb helvetica.</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="content-box">
							<h4>Office Ipsum</h4>
							<p>Value prop overcome key issues to meet key milestones, yet dogpile that. Social currency show pony bells and whistles pipeline can you ballpark the cost per unit for me deliverables. Reach out drill down, nor come up with something buzzworthy, but market-facing. Paddle on both sides level the playing field, and cross sabers. Accountable talk we need to button up our approach, pushback. Come up with something buzzworthy meeting assassin, but tbrand terrorists, but obviously. Old boys club get buy-in race without a finish line, three-martini lunch win-win cannibalize. Game-plan sacred cow. Paddle on both sides level the playing field, and cross sabers.</p>
						</div>
					</div>
				</div><!--.row-->
				<!-- End Column Example -->

				<!-- Begin Source Code Snippets -->
				<h3>CSS Source Code</h3>
				<pre>
/********************************************
* Flexbox Column Height Control
* Equal height content boxes using Flexbox CSS
*
* Author: rlewis37
********************************************/

/*
* add the class "row-flex" to each row that
* houses columns that need to be equal height
*
* this example is set to work on the MD breakpoint
* adjust @media query min-width if necessary
*/

.row-flex > div[class*="col-"] {
  margin-bottom: 5px;
}

/* use the min-width of the appropriate breakpoint (this is set on md and lg)*/
@media only screen and (min-width: 992px) {
  .row-flex {
    display: flex;
    flex: 1 1 auto;
    -webkit-flex-flow: row wrap;
    align-content: flex-start;
  }

  .row-flex > div[class*="col-"] {
    display: flex;
    flex: 1 1 auto;
    margin: -.2px;
  }
}

/********************************************
* Non-Essential Page Styles
********************************************/
.content-box {
  background-color: #cccccc;
  padding: 15px;
}
				</pre>
				<h3>HTML Source Code</h3>
				<pre>
&lt;!-- Begin Columns Here --&gt;
&lt;div class="row row-flex"&gt;
  &lt;div class="col-md-3"&gt;
    &lt;div class="content-box"&gt;
      &lt;h4&gt;Riker Ipsum&lt;/h4&gt;
      &lt;p&gt;Travel time to the nearest starbase? Fear is the true enemy, the only enemy. Now we know what they mean by 'advanced' tactical training. Flair is what marks the difference between artistry and mere competence. Yes, absolutely, I do indeed concur, wholeheartedly! But the probability of making a six is no greater than that of rolling a seven. Some days you get the bear, and some days the bear gets you. We finished our first sensor sweep of the neutral zone. I've had twelve years to think about it. And if I had it to do over again, I would have grabbed the phaser and pointed it at you instead of them. Earl Grey tea, watercress sandwiches... and Bularian canapés? Are you up for promotion? Not if I weaken first. I guess it's better to be lucky than good.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-md-3"&gt;
    &lt;div class="content-box"&gt;
      &lt;h4&gt;Kitty Ipsum&lt;/h4&gt;
      &lt;p&gt;Burrow under covers jump off balcony, onto stranger's head nap all day meowing non stop for food spread kitty litter all over house. Purr for no reason meow so refuse to drink water except out of someone's glass. Leave dead animals as gifts jump launch to pounce upon little yarn mouse, bare fangs at toy run hide in litter box until treats are fed burrow under covers lay on arms while you're using the keyboard, cat is love, cat is life yet unwrap toilet paper.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-md-3"&gt;
    &lt;div class="content-box"&gt;
      &lt;h4&gt;Hipster Ipsum&lt;/h4&gt;
      &lt;p&gt;Messenger bag food truck brooklyn mumblecore williamsburg, twee blue bottle banjo microdosing chicharrones dreamcatcher church-key hella cliche. Lumbersexual deep v single-origin coffee shabby chic intelligentsia. Mlkshk lo-fi try-hard, tote bag swag seitan celiac tacos.&lt;/p&gt;
      &lt;p&gt;iPhone humblebrag crucifix helvetica organic direct trade pickled. IPhone blog small batch, art party post-ironic direct trade keytar butcher. Gluten-free post-ironic chia, tilde deep v brunch ennui shabby chic mumblecore green juice ethical sartorial distillery slow-carb helvetica.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="col-md-3"&gt;
    &lt;div class="content-box"&gt;
      &lt;h4&gt;Office Ipsum&lt;/h4&gt;
      &lt;p&gt;Value prop overcome key issues to meet key milestones, yet dogpile that. Social currency show pony bells and whistles pipeline can you ballpark the cost per unit for me deliverables. Reach out drill down, nor come up with something buzzworthy, but market-facing. Paddle on both sides level the playing field, and cross sabers. Accountable talk we need to button up our approach, pushback. Come up with something buzzworthy meeting assassin, but tbrand terrorists, but obviously. Old boys club get buy-in race without a finish line, three-martini lunch win-win cannibalize. Game-plan sacred cow. Paddle on both sides level the playing field, and cross sabers.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;&lt;!--.row--&gt;
&lt;!-- End Column Example --&gt;
				</pre><!--end source coe snippets-->
			</div><!--.container-->
		</main>
	</body>
</html>