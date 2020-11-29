<!DOCTYPE html>
<html>
<head>

	<title>Header</title>

	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
	
</head>

	<style>
		h1 {
		  display: flex;
		  justify-content: center;
		  align-items: center;
		  height: 200px;
		  color: #ffffff;
		  font-size: 100px;
		  text-shadow: 8px 10px 11px black;
		}
		
		.image {
		background-image: url(head.jpg);
		height: 250px;
		}
		
		<!--- NavBar --->
		.navbar-custom {
			background-color: #990000;
		}
		
		<!--- brand & text color --->
		.navbar-custom .navbar-brand,
		.navbar-custom .navbar-text {
			color: rgba(255,255,255,.8);
		}
		<!--- link color --->
		.navbar-custom .navbar-nav .nav-link {
			color: rgba(255,255,255,.5);
		}
		<!--- color of active or hovered links --->
		.navbar-custom .nav-item.active .nav-link,
		.navbar-custom .nav-item:hover .nav-link {
			color: #ffffff;
		}
		
	</style>


<body>
<!------------------------------------------------------------------ head --------------------------------------------------------------->
	<div class="image">
	
	<div class="center">
		<h1><a style="text-decoration : none; font-family: Sofia; color : #ffffff; font-size:100px;" href=main.html>Penangeat</a></h1>
	</div>

<!------------------------------------------------------------------ Navigation --------------------------------------------------------------->
	<?php session_start(); ?>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
		  
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
		  </button>
			
			<div class="mx-auto order-0" id="navbarNav">
				<ul class="navbar-nav">
				
					<?php if(isset($_SESSION['uname'])){ ?>
						<li class="nav-item">
							<a class="nav-link" style="color:dark;" href="index.php">Hello, <?php echo $_SESSION['uname'] ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">About us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="blog_entry.php">Blog</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="restaurant.php">Reserve</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="logout.php">Logout</a>
						</li>
						
					<?php
						} else {
					?>
						<li class="nav-item">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">About us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="login.php">Log In</a>
						</li>
					<?php
						}
					?>
				</ul>
			</div>
		</div>
    </nav>
				
	
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>
</html>

