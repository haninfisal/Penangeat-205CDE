
<?php include "reserveconfig.php";?>
<?php include 'navbar.php';?>

<!DOCTYPE html>
<head>

	<title>Reserve</title>

	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in head tag ---------->
		
			
</head>

<!------------------------------------------------------------------ CSS --------------------------------------------------------------->

<style>

	h1 {
	 
		font-family: Sofia;
		opacity: 0.6;
	 
	}
	
	hr {
    border-top: 1px solid #007bff;
    width:70%;
	}

	a {color: #000;}

	
	<!-------------------- Pop up form ------------------------>

		/* The popup form - hidden by default */
		.form-popup {
		  display: none;
		  position: fixed;
		  bottom: 0;
		  right: 15px;
		  border: 3px solid #f1f1f1;
		  z-index: 9;
		}

		/* Add styles to the form container */
		.form-container {
		  max-width: 300px;
		  padding: 10px;
		  background-color: white;
		}

		/* Full-width input fields */
		.form-container input[type=text], .form-container input[type=number], .form-container select[type=text], .form-container input[type=email], .form-container input[type=datetime-local]{
		  width: 100%;
		  padding: 15px;
		  margin: 5px 0 22px 0;
		  border-radius: 25px;
		  border: none;
		  background: #f1f1f1;
		}

		/* When the inputs get focus, do something */
		.form-container input[type=text]:focus, .form-container input[type=password]:focus {
		  background-color: #ddd;
		  outline: none;
		}

		/* Set a style for the submit */
		.form-container .btn {
		  background-color: #4CAF50;
		  color: white;
		  padding: 16px 20px;
		  border-radius: 25px;
		  cursor: pointer;
		  width: 100%;
		  margin-bottom:10px;
		  opacity: 0.8;
		}

		/* Add a red background color to the cancel button */
		.form-container .cancel {
		  background-color: red;
		}

		/* Add some hover effects to buttons */
		.form-container .btn:hover, .open-button:hover {
		  opacity: 1;
		}

</style>


<body>
<!------------------------------------------------------------------ jumbo head--------------------------------------------------------------->
	<div class="jumbotron jumbotron-fluid bg-cover text-white" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url(prawns.jpg)">
		<div class="container">
			<h1 class="display-2 text-center">Penangeat</h1>
			<p class="lead text-center">Reserve a table at the best restaurant in Penang, You deserve it!</p>
				<hr class="my-4">
					<p></p>
		</div>
	</div>
	
	<!------------------------------------------------------------------ content --------------------------------------------------------------->
	
	<div class="container">
		<div class="row">
			<div class="col-sm">
			<?php

				if (isset($_POST['submitted'])){
				
				$dbc = mysqli_connect('localhost','root','');
				mysqli_select_db($dbc, 'reserve');
				
				//validate the form data
				$problem = FALSE;
				if (!empty($_POST['rname'])) {
					$rname = trim($_POST['rname']);	
				}
				
				if (!empty($_POST['fname']) && !empty($_POST['email'])) {
					$fname = trim($_POST['fname']);
					$email = trim($_POST['email']);
				}
				
				if (!empty($_POST['contact']) && !empty($_POST['guestNum'])) {
					$contact = trim($_POST['contact']);
					$guestNum = trim($_POST['guestNum']);
				}
				
				if (!empty($_POST['reservedt'])) {
					$reservedt = trim($_POST['reservedt']);
					
				} else {
					print '<center><p style="color:red;"> Reservation Failed, Please Resubmit.</p><center>';
					$problem = TRUE;
				}
				
				if (!$problem) {
					//define query:
					$query = "INSERT INTO user_reserve(id, rname, fname, email, contact, guestNum, reservedt) VALUES (0, '$rname','$fname','$email', '$contact', '$guestNum', '$reservedt')";
					//execute query:
					if (@mysqli_query($dbc, $query)) {
						print '<center><p style="font-family:Arial; font-size: 25px;">Your Reservation Has Been Confirmed.</p></center>';
					} else {
						print '<p style="color:red;"> Couldnt add the entry because: <br/>'.mysqli_error($dbc).'.</p>
						<p>The query was: ' . $query . '</p>';
					}
				}
				mysqli_close($dbc);
				}
				
				?>
			</div>
		</div>
	</div>
	
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	<h1 class="text-center" style="font-family: Hervatica;">Restaurant Available For Reservation</h1>
	<hr>	
			<div class="col-sm-8 mx-auto pt-5">
			  <div class="card text-center">
			  <div class="card-body">
				<img class="card-img-top" height="500" src="nurul.jpg" alt="Card image cap">
				</div>
				<div class="card-body">
				  <h5 class="card-title">Nurul Ikan Bakar</h5>
				  <hr>
				  <p>
					<a class="btn btn-primary" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse">
					  <i class="fas fa-map"></i> Maps
					</a>
				  </p>
				  <div class="collapse" id="collapse">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31779.042238865455!2d100.30735838875088!3d5.358808239028592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac103fbb6f0ed%3A0x753362b58270526e!2sSeafood%20City%20Nurul%20Ikan%20Bakar!5e0!3m2!1sen!2smy!4v1606623906478!5m2!1sen!2smy" width="600" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
					<div class="card-footer text-muted">
					   <div class="text-center">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fas fa-calendar-alt"></i> Reserve Now</button>
					  </div>
				</div>
			  </div>
			</div>
		</div>
		
		<div class="col-sm-8 mx-auto pt-5">
			  <div class="card text-center">
			  <div class="card-body">
				<img class="card-img-top" height="500" src="pizza.jpg" alt="Card image cap">
				</div>
				<div class="card-body">
				  <h5 class="card-title">Streeto Pizza</h5>
				  <hr>
				  <p>
					<a class="btn btn-primary" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse">
					  <i class="fas fa-map"></i> Maps
					</a>
				  </p>
				  <div class="collapse" id="collapse">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.8015128379375!2d100.22919781476475!3d5.293642296159655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304a953bf586fb43%3A0xe9bfc443f496a5a0!2sStreeto%20Pizza%20Teluk%20Kumbar!5e0!3m2!1sen!2smy!4v1606648709568!5m2!1sen!2smy" width="600" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
					<div class="card-footer text-muted">
					   <div class="text-center">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fas fa-calendar-alt"></i> Reserve Now</button>
					  </div>
				</div>
			  </div>
			</div>
		</div>
		
		<div class="col-sm-8 mx-auto pt-5">
			  <div class="card text-center">
			  <div class="card-body">
				<img class="card-img-top" height="500" src="biryani.jpg" alt="Card image cap">
				</div>
				<div class="card-body">
				  <h5 class="card-title">Yusuf Restaurant</h5>
				  <hr>
				  <p>
					<a class="btn btn-primary" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse">
					  <i class="fas fa-map"></i> Maps
					</a>
				  </p>
				  <div class="collapse" id="collapse">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.8015128379375!2d100.22919781476475!3d5.293642296159655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304a953bf586fb43%3A0xe9bfc443f496a5a0!2sStreeto%20Pizza%20Teluk%20Kumbar!5e0!3m2!1sen!2smy!4v1606648709568!5m2!1sen!2smy" width="600" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
					<div class="card-footer text-muted">
					   <div class="text-center">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fas fa-calendar-alt"></i> Reserve Now</button>
					  </div>
				</div>
			  </div>
			</div>
		</div>
			
			
		</div>
	</div>
<br>
	

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">


		<script>
		function openForm() {
		  document.getElementById("myForm").style.display = "block";
		}

		function closeForm() {
		  document.getElementById("myForm").style.display = "none";
		}
		</script>


		<!-- Modal -->
		<div id="myModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
			  <h4 class="modal-title">Reservation Form</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			  </div>
			  <div class="modal-body">
			  
				<center>
			  <form action="restaurant.php" method="post" class="form-container">
			  
				<label for="chooseFood"><b>Choose Restaurant : </b></label>
				  <select type="text" id="chooseFood" name="rname" required>
					<option value="Nurul Ikan Bakar">Nurul Ikan Bakar</option>
					<option value="Streeto Pizza">Streeto Pizza</option>
					<option value="Yusuf Restaurant">Yusuf Restaurant</option>
				  </select>
				  
				<label for="fname"><b>Full Name :</b></label>
				<input type="text" placeholder="Enter Full Name" name="fname" required>
				
				<label for="email"><b>Email :</b></label>
				<input type="email" placeholder="Enter Email" name="email" required>
				
				<label for="contact"><b>Contact :</b></label>
				<input type="text" placeholder="Enter Contact Number" name="contact" required>

				<label for="guestNum"><b>Guests :</b></label>
				<input type="number" placeholder="Number of Guests" name="guestNum" required>
				
				<label for="reservedt">Date and Time : </label>
				<input type="datetime-local" id="reservedt" name="reservedt" required />
				

				<button type="submit" name="submit" style="background-color: blue;" class="btn">Confirm</button>
				<input type="hidden" name="submitted" value="true"/>
				
			  </form>			
				</center>
			  </div>
			  <div class="modal-footer">
			  <?php

			if (isset($_POST['submitted'])){
			
			$dbc = mysqli_connect('localhost','root','');
			mysqli_select_db($dbc, 'reserve');
			
			//validate the form data
			$problem = FALSE;
			if (!empty($_POST['fname']) && !empty($_POST['email'])) {
				$fname = trim($_POST['fname']);
				$email = trim($_POST['email']);
			}
			
			if (!empty($_POST['contact']) && !empty($_POST['guestNum'])) {
				$contact = trim($_POST['contact']);
				$guestNum = trim($_POST['guestNum']);
			}
			
			if (!empty($_POST['reservedt'])) {
				$reservedt = trim($_POST['reservedt']);
				
			} else {
				print '<center><p style="color:red;"> Please submit all details.</p><center>';
				$problem = TRUE;
			}
			
			if (!$problem) {
				//define query:
				$query = "INSERT INTO user_reserve(id, fname, email, contact, guestNum, reservedt) VALUES (0, '$fname','$email', '$contact', '$guestNum', '$reservedt')";
			}
			mysqli_close($dbc);
			}
			
			?>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>

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