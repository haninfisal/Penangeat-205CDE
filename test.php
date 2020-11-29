<html>
<head>

<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="mystyle.css">
	
	<?php include 'header.php';?>
	
</head>


<body>

	<?php session_start(); ?>
	<nav class="navbar navbar-expand-sm navbar-custom py-1 static-top">
		<a class="navbar-brand" href="#">
			<img src="logo.png" alt="Logo" style="width:40px;">
		</a>
        <div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" 
				data-target="#navbarResponsive" aria-controls="navbarResponsive">
					<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
				
					<?php if(isset($_SESSION['username'])){ ?>
						<li class="nav-item">
							<a class="nav-link" style="color:white;" href="#">Welcome <?php echo $_SESSION['username'] ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="logout.php">Logout</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="booktime.php">Book Time</a>
						</li>
					<?php
						} else {
					?>
						<li class="nav-item">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="login.php">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="register.php">Register</a>
						</li>
					<?php
						}
					?>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact Us</a>
					</li>
				</ul>
			</div>
		</div>
    </nav>
</body>
</html>
				
				
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
