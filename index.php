<!DOCTYPE html>
<html>
	<head>

		<title>Home</title>

		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		
		<?php include 'header.php';?>
		
		<link rel="stylesheet" type="text/css" href="indexstyle.css">
		
		
	</head>

	<body>

<!------------------------------------------------------------------ Content ------------------------------------------------------------------------------------------->  
			<section id="gallery">
			  <div class="container pt-5">
			  <h2 class="text-center" style="font-family: Hervatica; opacity: 0.6;">Dont know what to eat?</h2>
			<hr>
				<div class="row pt-3">
				<div class="col-lg-4 mb-4">
				<div class="card">
				  <img src="laksa.jpg" style="height: 230px" alt="" class="card-img-top">
				  <div class="card-body">
					<h5 class="card-title">Penang Most Favourite</h5>
					<p class="card-text">The finger-licking good kind of food, you should taste!</p>
				   <a href="most-fav.php" class="btn btn-outline-success btn-sm">View More</a>
				  </div>
				 </div>
				</div>
			  <div class="col-lg-4 mb-4">
			  <div class="card">
				  <img src="toast.jpg" style="height: 230px" alt="" class="card-img-top">
				  <div class="card-body">
					<h5 class="card-title">Penang Best Deserts</h5>
					<p class="card-text">Never too boring for a desert to satify your sweet tooth ;)</p>
				   <a href="desert.php" class="btn btn-outline-success btn-sm">View More</a>
				  </div>
				  </div>
				</div>
				<div class="col-lg-4 mb-4">
				<div class="card">
				  <img src="nasi.jpg" alt="" style="height: 230px" class="card-img-top">
				  <div class="card-body">
					<h5 class="card-title">Penang Hot Nasi Kandar</h5>
					<p class="card-text">Mouth-watering Nasi Kandar originates from Penang, Just for you.</p>
					<a href="nasikandar.php" class="btn btn-outline-success btn-sm">View More</a>
				  </div>
				 </div>
				</div>
			  </div>
			</div>
			</section>

<!------------------------------------------------- reservation middle page ---------------------------------------------->
		<div class="container pt-3">
		<h2 class="text-center" style="font-family: Hervatica; opacity: 0.6;">Make a Reservation at Available Restaurant</h2>
				<hr>
			<div class="card mb-3">
			  <img src="rest.jpg" class="card-img-top" alt="...">
			  <div class="card-body text-center">
				<h5 class="card-title">Reserve Table</h5>
				<p class="card-text">Reserve a table at the best restaurant now and eat with a big smile on your face, Yes?</p>
				<a href="restaurant.php" class="btn btn-outline-success btn-sm">Reserve Now</a>
			  </div>
			</div>
		</div>

<!---------- explore ---------->

<?php require ('explore.php') ?>

	 
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


	</body>
</html>
<!----------footer---------->
<?php include 'footer.html';?>
