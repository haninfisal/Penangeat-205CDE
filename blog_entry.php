<?php include 'navbar.php';?>
<!DOCTYPE html>
<html>
<head>

	<title>Entries</title>
	
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">


</head>
<style>
		

	h1 {
	 
		font-family: Sofia;
		opacity: 0.6;
	 
	}

</style>

<body>

<!------------------------------------------------------------------ Jumbo Head ------------------------------------------------------------------>

	<div class="jumbotron jumbotron-fluid bg-cover text-white" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url(waffle.jpg)">
		<div class="container">
			<h1 class="display-2 text-center">Penangeat</h1>
			<p class="lead text-center">Share with us your experience!</p>
				<hr class="my-4">
					<p></p>
		</div>
	</div>
	
<!------------------------------------------------------------------ add entry button--------------------------------------------------------------->
	
	<div class="container pt-3">
		<div class="row">
			<div class="col-sm-9 mx-auto">
					<a href="blog.php"><button type="button" class="btn btn-outline-primary">Add New Entry</button></a>
			</div>
		</div>
	</div>
<!------------------------------------------------------------------ content --------------------------------------------------------------->
<div class="container pt-3">
		<div class="row">
			<div class="col-sm-9 mx-auto">
				<div class="card">
					<div class="card-body">
						<?php 

						$dbc = mysqli_connect('localhost','root','');
						mysqli_select_db($dbc, 'pgblog');

						$query = 'SELECT * FROM entries ORDER BY date_posted DESC';

						if ($r = mysqli_query($dbc, $query)) {
							
							while($row = mysqli_fetch_array($r)){
								print "<p>Posted by Human<h3>{$row['title']}</h3>{$row['entry']}<br></p><hr />\n";
							}
						} else {
							print '<p style="color:red;">Could not retrieve the data because: <br />' . mysqli_error($dbc) . '.</p>
							<p>The query being run was: ' . $query . '</p>';
						}

							mysqli_close($dbc);
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<!---------- explore ---------->
<?php require ('explore.php') ?>

<!---------- footer---------->

<?php require ('footer.html') ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>