<?php include 'blogconfig.php';?>

<?php include 'navbar.php';?>

<!DOCTYPE html>
<head>

	<title>Blog</title>

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

	<div class="jumbotron jumbotron-fluid bg-cover text-white" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url(main.jpg)">
		<div class="container">
			<h1 class="display-2 text-center">Penangeat</h1>
			<p class="lead text-center">Tink-tink! Feel free to share your thoughts, love.</p>
				<hr class="my-4">
					<p></p>
		</div>
	</div>
	
		
		
		
	<div class="container">
	<?php
		
		if (isset($_POST['submitted'])){
		
		$dbc = mysqli_connect('localhost','root','');
		mysqli_select_db($dbc, 'pgblog');
		
		//validate the form data
		$problem = FALSE;
		if (!empty($_POST['title']) && !empty($_POST['entry'])) {
			$title = trim($_POST['title']);
			$entry = trim($_POST['entry']);
			
		} else {
			print '<p style="color:red;"> Please Check Your Title and Content.</p>';
			$problem = TRUE;
		}
		
		if (!$problem) {
			//define query:
			$query = "INSERT INTO entries(post_id, title, entry, date_posted) VALUES (0, '$title','$entry', NOW())";
			//execute query:
			if (@mysqli_query($dbc, $query)) {
				print '<center><p style="color:blue;"> Your Content Has Been Published!</p></center>';
			} else {
				print '<p style="color:red;"> Couldnt add the entry because: <br/>'.mysqli_error($dbc).'.</p>
				<p>The query was: ' . $query . '</p>';
			}
		}
		
		mysqli_close($dbc);
		}
		
		?>
		<div class="row">
			<div class="col-md-6 mx-auto">
				<div class="card">
						<div class="card-body">
							<form action="blog.php" method="post">
							
								<div class="form-group">
									<label for="title">Title: </label>
									<center><input type="text" name="title" class="form-control" id="FormControlTitle" maxlength="100" placeholder="Enter Your Title" required>
								</div>
								  
								<div class="form-group">
									<label for="title">Content: </label>
									<textarea name="entry" class="form-control" id="FormControlTextarea1" cols="40" rows="5" placeholder="Start Typing Here..." required></textarea>
								  </div>
							
								<center><input type="submit" name="submit" value="Publish"/><center>
								<input type="hidden" name="submitted" value="true"/>
							</form>
						</div>
					</div>
				</div>
			</div>
		<div>
	</div>
</div>

<!---------- explore ---------->
<?php require ('explore.php') ?>

<!---------- footer ---------->
<?php require ('footer.html') ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>