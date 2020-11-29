<?php 
include "loginconfig.php";
?>
<?php 
include "navbar.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Log In</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="signupstyle.css">
	
	<?php
		
		$error_message = ""; $success_message = "";

		if(isset($_POST['btnlogin'])){

			$uname = mysqli_real_escape_string($con,$_POST['uname']);
			$password = mysqli_real_escape_string($con,$_POST['password']);

			if ($uname != "" && $password != ""){

				$sql_query = "select count(*) as cntUser from users where uname='".$uname."' and password='".$password."'";
				$result = mysqli_query($con,$sql_query);
				$row = mysqli_fetch_array($result);

				$count = $row['cntUser'];

				if($count > 0){
					$_SESSION['uname'] = $uname;
					$success_message = "Log in successfully.";
					header('Refresh:1;URL=index.php');
				}else{
					$error_message = "Invalid username and password";
				}

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
		 
          <form method='post' action=''>
		  <div id="div_login">
            <h1>LOG IN</h1>
            <div>
			
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
              <label for="password">Password:</label>
              <input type="password" class="form-control" name="password" id="password" required="required" maxlength="80">
            </div>
			<div class="col text-center">
            <button type="submit" name="btnlogin" class="btn btn-primary ">Log In</button>
			</div>
			<hr>
			<div style="font-size:85%" >
            Don't have an account? <a href="signup.php">Sign Up</a>
                                </div>
		  </form>
        </div>
	  </div>
     </div>
    </div>
  </body>
</html>