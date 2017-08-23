<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />

		<!-- Custom CSS Goes HERE -->
		<link rel="stylesheet" href="css/style.css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery - required for Bootstrap Components -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<title>Bootstrap Sandbox | Scrollspy Demo</title>
	</head>
	<body data-spy="scroll" data-target="#nav-links">

		<header>
			<nav id="main-nav" class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-links" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Scrollspy Demo</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="nav-links">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#home">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#gallery">Gallery</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</header>

		<section id="home">
			<div class="container">
				<div class="jumbotron text-center">
					<h1>Scrollspy Demo</h1>
					<p class="lead">Look at the navbar links!</p>
				</div>
			</div>
		</section>

		<section id="about">
			<div class="container">
				<h2 class="h1">About</h2>
				<div class="row">
					<div class="col-md-6">
						<p class="lead">Crucifix sustainable distillery quinoa shoreditch. Offal trust fund knausgaard gochujang, marfa fingerstache cornhole keffiyeh cloud bread pickled kitsch scenester vegan freegan. Semiotics keffiyeh vice, skateboard biodiesel sustainable glossier flannel sartorial XOXO viral. Franzen etsy street art 90's fixie air plant fanny pack yr cold-pressed brunch shoreditch. Before they sold out enamel pin 3 wolf moon pitchfork venmo, jianbing glossier hexagon sriracha. Yuccie vegan raw denim, try-hard pok pok tumeric microdosing adaptogen four dollar toast tote bag.</p>
					</div>
					<div class="col-md-6">
						<p class="lead">Pug next level ennui, slow-carb jean shorts organic cliche post-ironic pickled viral adaptogen kinfolk narwhal. Edison bulb brooklyn irony tattooed tilde shabby chic iPhone pug VHS vegan dreamcatcher messenger bag food truck direct trade pop-up. Portland celiac kogi activated charcoal, meditation yuccie vinyl. Readymade next level mixtape, subway tile forage microdosing pitchfork quinoa post-ironic occupy waistcoat. Bushwick pug selfies shabby chic cred venmo raclette palo santo fanny pack shoreditch. Flannel tbh neutra gochujang forage, biodiesel franzen.</p>
					</div>
				</div>
			</div>
		</section>

		<section id="gallery">
			<div class="container">
				<h2 class="h1 text-right">Gallery</h2>
				<div class="row">
					<div class="col-md-3 col-xs-6">
						<div class="thumbnail">
							<img src="http://www.fillmurray.com/500/500" alt="bill murray" class="img-responsive">
						</div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="thumbnail">
							<img src="http://www.fillmurray.com/500/500" alt="bill murray" class="img-responsive">
						</div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="thumbnail">
							<img src="http://www.fillmurray.com/500/500" alt="bill murray" class="img-responsive">
						</div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="thumbnail">
							<img src="http://www.fillmurray.com/500/500" alt="bill murray" class="img-responsive">
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="contact">
			<div class="container text-center">
				<h2 class="h1">Contact</h2>
				<div class="row">
					<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
						<form>
							<div class="form-group">
								<label for="txtName" class="sr-only">Name</label>
								<input id="txtName" type="text" class="form-control" placeholder="Name">
							</div>
							<div class="form-group">
								<textarea name="txtMessage" id="txtMessage" cols="30" rows="10" class="form-control" placeholder="Your Complaint Here"></textarea>
							</div>
							<button class="btn btn-default">Send</button>
						</form>
					</div>
				</div>
			</div>
		</section>

		<footer>
			<div class="container text-center">
				<a href="https://github.com/rlewis2892/bootstrap-sandbox/tree/dhicks18" target="_blank"><i class="fa fa-3x fa-github"></i></a>
			</div>
		</footer>

	</body>
</html>