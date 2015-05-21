<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once("lib/head-utils.html"); ?>
		<title>Bootstrap Sandbox</title>
	</head>
	<body>

		<!--header include-->
		<?php require_once("lib/header.html"); ?>

		<main>
			<div class="container">
				<p>The above example is a navbar with a login form inside a dropdown button. See HTML and CSS code below :-)</p>
				<h3>HTML:</h3>
				<pre>
&lt;header&gt;
  &lt;div class="container"&gt;
    &lt;nav class="navbar"&gt;

      &lt;!-- logo and mobile toggle button get grouped together for better mobile display --&gt;
      &lt;div class="navbar-header"&gt;

        &lt;!-- this is the mobile menu button --&gt;
        &lt;button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-menu"&gt;
          &lt;span class="sr-only"&gt;main menu&lt;/span&gt;
          &lt;span class="glyphicon glyphicon-menu-hamburger"&gt;&lt;/span&gt;
        &lt;/button&gt;

        &lt;a class="navbar-brand" href="#"&gt;Froodies!&lt;/a&gt;
      &lt;/div&gt;

      &lt;!-- here are your main nav links, grouped for toggling --&gt;
      &lt;div class="collapse navbar-collapse" id="main-menu"&gt;
        &lt;ul class="nav navbar-nav navbar-right"&gt;
          &lt;li&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;Link1&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;Link2&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;Link3&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#" class="nav-button btn btn-default"&gt;Sign Up&lt;/a&gt;&lt;/li&gt;
          &lt;li class="dropdown"&gt;
            &lt;button type="button" class="nav-button dropdown-toggle btn btn-default" data-toggle="dropdown" role="button" aria-expanded="false"&gt;Sign In&nbsp;&nbsp;&lt;span class="caret"&gt;&lt;/span&gt;&lt;/button&gt;

            &lt;div class="dropdown-menu"&gt;
              &lt;p&gt;Sign into your account:&lt;/p&gt;
              &lt;form class="navbar-form"&gt;
                &lt;div class="form-group"&gt;
                &lt;input id="txtUsername001" type="text" class="form-control" placeholder="username"&gt;
                  &lt;input id="pswPassword001" type="password" class="form-control" placeholder="password"&gt;
                &lt;/div&gt;
                &lt;button type="submit" class="btn btn-default pull-right"&gt;Submit&lt;/button&gt;
                &lt;div class="clearfix"&gt;&lt;/div&gt;
              &lt;/form&gt;
            &lt;/div&gt;

          &lt;/li&gt;

        &lt;/ul&gt;
      &lt;/div&gt;
    &lt;/nav&gt;
  &lt;/div&gt;
&lt;/header&gt;</pre>
				<h3>CSS:</h3>
				<pre>
/********************************************
* Base Styles
********************************************/
header {
  padding: 20px 0;
  border-bottom: 1px solid #ddd;
}

main {
  margin-top: 40px;
}

/********************************************
* Navbar Styles
********************************************/
.navbar {
  margin: 0;
}

.navbar-brand {
  font-size: 2em;
}

button.nav-button {
  margin: 8px 0 8px 10px;
}

.navbar-toggle {
  border: 1px solid #ddd;
  padding: 10px 15px;
  margin: 0;
}

/********************************************
* Form Styles
********************************************/
.dropdown-menu p {
  padding: 10px 15px 0;
  margin: 0;
}

.navbar-form input {
  margin-bottom: 5px;
}

@media only screen and (max-width: 768px) {
  .navbar-form {margin: 0;}
}</pre>
			</div>
		</main>

		<!--footer include-->
		<?php /*require_once("lib/footer.html"); */?>

	</body>
</html>