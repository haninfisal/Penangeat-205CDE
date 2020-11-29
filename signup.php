<?php 
include "registerconfig.php";
?>

<?php 
include "navbar.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="signupstyle.css">
	
		<?php 
			$error_message = ""; $success_message = "";

			// Register user
			if(isset($_POST['btnsignup'])){
			   $uname = trim($_POST['uname']);
			   $email = trim($_POST['email']);
			   $password = trim($_POST['password']);
			   $confirmpassword = trim($_POST['confirmpassword']);

			   $isValid = true;

			   // Check fields 
			   if($uname == '' || $email == '' || $password == '' || $confirmpassword == ''){
				 $isValid = false;
				 $error_message = "Please fill all fields.";
			   }
			   
			   // Check confirm password matching or not
			   if($isValid && ($password != $confirmpassword) ){
				 $isValid = false;
				 $error_message = "Confirm password not matching";
			   }

			   // Check if Email is valid 
			   if ($isValid && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
				 $isValid = false;
				 $error_message = "Invalid Email, Please Enter Again.";
			   }

			   if($isValid){

				 // Check if Email already exist
				 $stmt = $con->prepare("SELECT * FROM users WHERE email=?");
				 $stmt->bind_param("s", $email);
				 $stmt->execute();
				 $result = $stmt->get_result();
				 $stmt->close();
				 if($result->num_rows > 0){
				   $isValid = false;
				   $error_message = "Email entered is already existed.";
				 }

			   }

			   // Records Insertion
			   if($isValid){
				 $insertSQL = "INSERT INTO users(uname,email,password ) values(?,?,?)";
				 $stmt = $con->prepare($insertSQL);
				 $stmt->bind_param("sss",$uname,$email,$password);
				 $stmt->execute();
				 $stmt->close();

				 $success_message = "Account created successfully.";
				 header('Refresh:3;URL=login.php');
			   }
			   
			}
		?>
	
  </head>
  
  <style>
  
  body {
		  background-image: url("main2.jpg");
		}
		
	h1 {
		
		text-align: center;
	}
  
  </style>
  
  <body>
  
    <div class='container rounded-lg p-3 my-3 text-dark'>
      <div class='row'>
		<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
		 <div class="card card-signup my-5">
		 <div class="card-body">
		 <h5 class="card-title text-center">SIGN UP</h5>
          <form method='post' action=''>	

            <?php 
            // Display Error message
            if(!empty($error_message)){
            ?>
            <div class="alert alert-danger">
              <strong>Error!</strong> <?= $error_message ?>
            </div>

            <?php
            }
            ?>

            <?php 
            // Display Success message
            if(!empty($success_message)){
            ?>
            <div class="alert alert-success">
              <strong>Success!</strong> <?= $success_message ?>
            </div>

            <?php
            }
            ?>

            <div class="form-group">
              <label for="fname">User Name:</label>
              <input type="text" class="form-control" name="uname" id="uname" required="required" maxlength="80">
            </div>
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" name="email" id="email" required="required" maxlength="80">
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control" name="password" id="password" required="required" maxlength="80">
            </div>
            <div class="form-group">
              <label for="pwd">Confirm Password:</label>
              <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" onkeyup='' required="required" maxlength="80">
            </div>
			
			<div class="col text-center">
            <button type="submit" name="btnsignup" class="btn btn-primary ">Submit</button>
			</div>
		  </form>
        </div>
	  </div>
     </div>
    </div>
  </body>
</html>
