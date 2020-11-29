<?php require ('navbar.php') ?>
<html>
<head>

	<title>Contact Us</title>
	
	

	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	

	<link rel="stylesheet" type="text/css" href="contactstyle.css">
		
	
</head>
		
	

<body>
<!------------------------------------------------------------------ Jumbo Head ------------------------------------------------------------------------------------------->


	<div class="jumbotron jumbotron-fluid bg-cover text-white" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url(food.jpg)">
		<div class="container">
			<h1 class="display-2 text-center">Penangeat</h1>
			<p class="lead text-center">Yuhuu, reach us through your messages!</p>
				<hr class="my-4">
					<p></p>
		</div>
	</div>
	
	<!------------------------------------------------------------------ Content ------------------------------------------------------------------------------------------->

	<div class="container contact-form pt-3">
	
		<form action="contact.php" method="post">
			
			<h3>Drop us your message, We would love to hear from you!</h3>
			<?php 

		if (isset($_POST['submitted'])){
		
		$dbc = mysqli_connect('localhost','root','');
		mysqli_select_db($dbc, 'contactdb');
		
		//validate the form data
		$problem = FALSE;
		if (!empty($_POST['txtName']) && !empty($_POST['txtEmail'])) {
			$txtName = trim($_POST['txtName']);
			$txtEmail = trim($_POST['txtEmail']);
		}
		
		if (!empty($_POST['txtPhone']) && !empty($_POST['txtMsg'])) {
			$txtPhone = trim($_POST['txtPhone']);
			$txtMsg = trim($_POST['txtMsg']);
			
		} else {
			print '<center><p style="color:red;"> Please submit all details.</p><center>';
			$problem = TRUE;
		}
		
		if (!$problem) {
			//define query:
			$query = "INSERT INTO usermsg(id, user_name, user_email, user_phone, user_msg, date_send) VALUES (0, '$txtName', '$txtEmail', '$txtPhone', '$txtMsg', NOW())";
			//execute query:
			if (@mysqli_query($dbc, $query)) {
				print '<center><p>Thank you for sending us your message.</p></center>';
		} else {
				print '<p style="color:red;"> Couldnt add the entry because: <br/>'.mysqli_error($dbc).'.</p>
				<p>The query was: ' . $query . '</p>';
			}
		}
		mysqli_close($dbc);
		}
?>

<!------------------------------------------------------------------ Message Form ------------------------------------------------------------------------------------------->
		   <div class="row">
				<div class="col-md-6">
					<div class="form-group">	
						<input type="text" name="txtName" id="validationServer01" class="form-control" placeholder="Your Name *" required />
					</div>
					
					<div class="form-group">
						<input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" required />
					</div>
					
					<div class="form-group">
						<input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" required />
					</div>
					
					<div class="col-md-12 text-center">
						<div class="form-group">
							<input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
							<input type="hidden" name="submitted" value="true"/>
						</div>
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="form-group">
						<textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;" required></textarea>
					</div>
				</div>
			</div>
		</form>
	</div>	
	
	<!---------- explore ---------->

	<?php require ('explore.php') ?>	
	
	<!---------- footer ---------->
	
	<?php require ('footer.html') ?>
</body>
</html>

