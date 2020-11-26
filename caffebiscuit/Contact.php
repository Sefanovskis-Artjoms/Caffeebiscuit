<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 ?>
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
				<li class="nav-item ">
					<a class="nav-link" href="Index">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Products">Our products</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="SignIn">Sign-In</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!--- Contact us -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">Contact Us</h1>
		</div>
		<hr>
	</div>
</div>
<!--- Two Column Section -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-lg-6">
			<p>Telefona nr: <span>+371 00 000 000</span></p>
			<br>
		</div>
		<div class="col-lg-6">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7061.830909105973!2d24.18158464128719!3d56.93724754263403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x378e86548133cabe!2sR%C4%ABgas%20Valsts%20tehnikums%20praktiskais%20centrs!5e0!3m2!1slv!2slv!4v1606412192065!5m2!1slv!2slv" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
	</div>
</div>
<hr class="my-4">
<!-- Forma -->
<div class="col-md-8">
	<form action="Contact" method="post">
		<div class="form-group">
    	<label for="name">First name:</label>
    	<input placeholder="Your first name" type="text" class="form-control" id="name" name="name " required>
  	</div>
		<div class="form-group">
    	<label for="name">Last name:</label>
    	<input placeholder="Your last name" type="text" class="form-control" id="surname" name="surname " required>
		</div>
		<div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="email" class="form-control" id="email" name="email" placeholder="Your email" name="email">
	  </div>
		<div class="form-group">
    	<label for="phone">Phone number:</label>
    	<input placeholder="Your phone number" type="number" class="form-control" id="phone" name="phone">
  	</div>
		<div class="form-group">
	    <label for="question">Enter your question:</label>
			<br>
	    <textarea placeholder="Your question" name="jautajums" id="question" rows="4" cols="100"></textarea>
	  </div>
		<button type="submit" class="btn btn-success" name="save">Enter</button>
	</form>
</div>
<?php
	if (isset($_POST['save'])) {
		echo "<b>Jūsu vārds : </b>{$_POST['name']}<br>";
		echo "<b>Jūsu uzvārds : </b>{$_POST['surname']}<br>";
		echo "<b>Jūsu epasts: </b>{$_POST['email']}<br>";
		echo "<b>Jūsu telefons: </b>{$_POST['phone']}<br>";
		echo "<b>Jūsu jautājums: </b>{$_POST['jautajums']}";
	}
?>
<!--- Footer -->
<footer>
	<div class="container-fluid">
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
