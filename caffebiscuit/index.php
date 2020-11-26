<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Caffee Biscuit</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="css/style.css" rel="stylesheet">
	<link rel="icon" href="img/cookie.png">
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
		<a class="navbar-brand" href="#"><img src="img/cookie.png" width="50px"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Products">Our products</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Contact">Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="SingIn">Sign-In</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1"></li>
		<li data-target="#slides" data-slide-to="2"></li>
	</ul>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="img/background10.jpg" >
			<div class="carousel-caption">
				<h1 class="display-2">Caffee Biscuit</h1>
				<h3>Welcome to our website!</h3>
			</div>
		</div>
		<div class="carousel-item">
			<img src="img/background11.jpg">
			<div class="carousel-caption">
				<h1 class="display-2">Caffee Biscuit</h1>
			</div>
		</div>
		<div class="carousel-item">
			<img src="img/background12.jpg">
			<div class="carousel-caption">
				<h1 class="display-2">Caffee Biscuit</h1>
			</div>
		</div>
	</div>
</div>
<!--- Jumbotron -->
<div class="container-fluid">
	<div class="row jumbotron">
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg col-xl-10">
			<p class="lead">A Coffee shop that provides you with the best service and a good quality products.</p>
		</div>
	</div>
</div>
<!--- Two Column Section -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-lg-6">
			<h2>If you feel it...</h2>
			<br>
			<p>The fun facts about coffee:</p>
			<p>Coffee is consumed in such great quantities, it is the world’s 2nd largest traded commodity, surpassed only by crude oil. It is our most beloved beverage after water.</p>
			<p>The word espresso comes from Italian and means “expressed” or “forced out”. Espresso is made by forcing very hot water under high pressure through finely ground, compacted coffee.</p>
			<p>Coffee stays warm 20% longer when you add cream. You’ll have to ask a physicist about that one.</p>
			<br>
		</div>
		<div class="col-lg-6">
			<img src="img/background13.jpg" class="img-fluid">
		</div>
	</div>
</div>
<!--- Footer -->
<footer>
	<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-12">
				<hr class="light">
				<h5>&copy;copyright</h5>
			</div>
		</div>
	</div>
</footer>
</body>
</html>
