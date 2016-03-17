<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- The 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
				integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
				integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

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
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
				  integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
				  crossorigin="anonymous"></script>

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
							<p><strong>Instructions</strong>: View the source code for the CSS, and add the Flexbox Column
								rules to your stylesheet. Add the class "row-flex" to each row that contains columns that need
								to be equal height. See Source code below.</p>
							<p>This example is set to work on the <strong>md</strong> Bootstrap breakpoint on up. Adjust the
								<code>min-width</code> on the @media query if desired.
								<br><strong>View on GitHub</strong>: <a
									href="https://github.com/rlewis2892/bootstrap-sandbox/tree/hackyhooker" target="_blank">https://github.com/rlewis2892/bootstrap-sandbox/tree/hackyhooker</a>
							</p>
						</div>
					</div>
				</div>

				<!-- Begin CHooker Example -->
				<div class="row row-flex">

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/icon-ddcb-lg.png" alt="Deep Dive Logo" height="60" width="100">
							<div class="caption">
								<h3>CNM STEMulus Center Deep Dive Coders Bootcamp</h3>
								<h3>Albuquerque, NM</h3>
								<h4>Capstone Project:</h4>
								<p>Project: Co-developer of Web-based, customized enterprise software solution that integrated
									business process for scheduling employees.</p>
								<h4>Coursework to include:</h4>
								<ul>
									<li>PHP 7</li>
									<li>MySQL</li>
									<li>JavaScript</li>
									<li>Enterprise Application Development</li>
									<li>Security</li>
									<li>It Project Management</li>
									<li>Web Design</li>
									<li>Computer Architecture</li>
									<li>Object Oriented Programming</li>
									<li>Bootstrap 3</li>
									<li>CSS 3</li>
								</ul>
								<p><a href="#" class="btn btn-primary" role="button">Capstone Project</a> <a
										href="http://stemuluscenter.org/deep-dive-coding-bootcamp-application/"
										class="btn btn-default" role="button">Apply For Deep Dive</a>
								</p>
							</div>
						</div>
					</div><!--/.col-->

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/gdi.jpg" alt="Girl Develop It Logo" height="700" width="700">
							<div class="caption">
								<h3>Girl Develop It!</h3>
								<h3>Albuquerque, NM</h3>
								<h4>Coursework to include:</h4>
								<ul>
									<li>HTML5</li>
									<li>CSS 3</li>
									<li>WAMP</li>
									<li>PHP</li>
									<li>MySQL</li>
								</ul>
								<p><a href="https://www.girldevelopit.com/chapters/albuquerque" class="btn btn-primary"
										role="button">Girl Develop It!</a> <a
										href="http://www.meetup.com/Girl-Develop-It-Albuquerque/" class="btn btn-default"
										role="button">Meetup for Girl Develop It!</a>
								</p>
							</div>
						</div>
					</div><!--.col-->
					​
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/teamworks.png" alt="Team Works Logo" height="120" width="200">
							<div class="caption">
								<h3>NM Commission on the Status of Women, Team Works</h3>
								<h3>Albuquerque, NM</h3>
								<h4>Coursework to include:</h4>
								<ul>
									<li>Computer science</li>
									<li>user end information technology</li>
									<li>interpersonal skills</li>
									<li>Job readiness</li>
									<li>Intro to building websites</li>
								</ul>
							</div>
						</div>
					</div><!--/.col-->
				</div><!--/.row-flex-->
				<p class="pull-right"><a href="#">Back to top</a></p>
				<div class="clearfix"></div>
				<!-- End CHooker Example -->

				<hr>

				<div class="row">
					<div class="col-xs-12">
						<h2>Welcome to Zorah's! We have Flexbox Panels!</h2>
					</div>
				</div>

				<!-- Begin DMancini Example -->
				<div class="row row-flex">

					<div class="col-sm-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Location</h3>
							</div>
							<div class="panel-body">
								<p>Wake up human for food at 4am vomit food and eat it again but hide when guests come over, yet claw drapes intrigued by the shower, and poop in litter box, scratch the walls. Jump launch to pounce upon little yarn mouse, bare fangs at toy run hide in litter box until treats are fed swat turds around the house for meowzer! and knock dish off table head butt cant eat out of my own dish. Burrow under covers.</p>
								<p>Favor packaging over toy scratch the furniture and chew iPad power cord, so refuse to drink water except out of someone's glass hopped up on catnip, yet swat at dog chase dog then run away. Find empty spot in cupboard and sleep all day fall over dead (not really but gets sypathy) my left donut is missing, as is my right. Knock dish off table head butt cant eat out of my own dish why must they do that dream about hunting birds, if it fits, i sits. Claws in your leg spit up on light gray carpet instead of adjacent linoleum, yet sniff other cat's butt and hang jaw half open thereafter for intrigued by the shower, but hopped up on catnip spot something, big eyes, big eyes, crouch, shake butt, prepare to pounce, but climb leg.</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Reviews</h3>
							</div>
							<div class="panel-body">
								<p>Wake up human for food at 4am vomit food and eat it again but hide when guests come over, yet claw drapes intrigued by the shower, and poop in litter box, scratch the walls. Jump launch to pounce upon little yarn mouse, bare fangs at toy run hide in litter box until treats are fed swat turds around the house for meowzer! and knock dish off table head butt cant eat out of my own dish. Burrow under covers.</p>
							</div>
						</div>
					</div>
				</div><!--/.row-flex-->
				<!-- End DMancini Example -->

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
* Panel Styles
********************************************/
.panel {
  width: 100%
}
				</pre>
				<h3>HTML Source Code</h3>
				<pre>
&lt;div class="row"&gt;
  &lt;div class="col-xs-12"&gt;
    &lt;h2&gt;Welcome to Zorah's! We have Flexbox Panels!&lt;/h2&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Begin DMancini Example --&gt;
&lt;div class="row row-flex"&gt;

  &lt;div class="col-sm-6"&gt;
    &lt;div class="panel panel-default"&gt;
      &lt;div class="panel-heading"&gt;
        &lt;h3 class="panel-title"&gt;Location&lt;/h3&gt;
      &lt;/div&gt;
      &lt;div class="panel-body"&gt;
        &lt;p&gt;Wake up human for food at 4am vomit food and eat it again but hide when guests come over, yet claw drapes intrigued by the shower, and poop in litter box, scratch the walls. Jump launch to pounce upon little yarn mouse, bare fangs at toy run hide
          in litter box until treats are fed swat turds around the house for meowzer! and knock dish off table head butt cant eat out of my own dish. Burrow under covers.&lt;/p&gt;
        &lt;p&gt;Favor packaging over toy scratch the furniture and chew iPad power cord, so refuse to drink water except out of someone's glass hopped up on catnip, yet swat at dog chase dog then run away. Find empty spot in cupboard and sleep all day fall over
          dead (not really but gets sypathy) my left donut is missing, as is my right. Knock dish off table head butt cant eat out of my own dish why must they do that dream about hunting birds, if it fits, i sits. Claws in your leg spit up on light gray
          carpet instead of adjacent linoleum, yet sniff other cat's butt and hang jaw half open thereafter for intrigued by the shower, but hopped up on catnip spot something, big eyes, big eyes, crouch, shake butt, prepare to pounce, but climb leg.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="col-sm-6"&gt;
    &lt;div class="panel panel-default"&gt;
      &lt;div class="panel-heading"&gt;
        &lt;h3 class="panel-title"&gt;Reviews&lt;/h3&gt;
      &lt;/div&gt;
      &lt;div class="panel-body"&gt;
        &lt;p&gt;Wake up human for food at 4am vomit food and eat it again but hide when guests come over, yet claw drapes intrigued by the shower, and poop in litter box, scratch the walls. Jump launch to pounce upon little yarn mouse, bare fangs at toy run hide
          in litter box until treats are fed swat turds around the house for meowzer! and knock dish off table head butt cant eat out of my own dish. Burrow under covers.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;&lt;!--/.row-flex--&gt;
&lt;!-- End DMancini Example --&gt;
				</pre>
				<!--end source code snippets-->

			</div><!--./container-->
		</main>
	</body>
</html>