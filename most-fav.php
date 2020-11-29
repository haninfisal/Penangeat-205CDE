<?php require ('navbar.php') ?>
<!DOCTYPE html>
<head>
	<title>Most Fav</title>

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

<!------------------------------------------------------------------ Tooltip ------------------------------------------------------------------------------------------->	
	<script> $(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
	</script>
	
<!------------------------------------------------------------------ Modal ------------------------------------------------------------------------------------------->	
	<script>
		$('#myModal').on('shown.bs.modal', function () {
	  $('#myInput').trigger('focus')
	})
	</script>
	
	

</head>

<!------------------------------------------------------------------ CSS ------------------------------------------------------------------------------------------->	

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


	.card{
		background-color: #FFFFFF;
		padding:0;
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		border-radius:4px;
		box-shadow: 0 4px 5px 0 rgba(0,0,0,0.14), 0 1px 10px 0 rgba(0,0,0,0.12), 0 2px 4px -1px rgba(0,0,0,0.3);
	}


	.card:hover{
		box-shadow: 0 16px 24px 2px rgba(0,0,0,0.14), 0 6px 30px 5px rgba(0,0,0,0.12), 0 8px 10px -5px rgba(0,0,0,0.3);
		color:black;
	}

	address{
	  margin-bottom: 0px;
	}


</style>


<body>
<!------------------------------------------------------------------ Jumbo Header ------------------------------------------------------------------------------------------->
	<div class="jumbotron jumbotron-fluid bg-cover text-white" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url(main.jpg)">
		<div class="container">
			<h1 class="display-2 text-center">Penangeat</h1>
			<p class="lead text-center">Nyummm, probabaly gonna be your favourite too!</p>
			<hr>
		</div>
	</div>
	
<!------------------------------------------------------------------ Content ------------------------------------------------------------------------------------------->
	<h2 class="text-center" style="font-family: Hervatica; opacity: 0.6;">Penang Most Favourite</h2>
		<hr>
	
	<div class="container">
	  <div class="row">
	  
		<div class="col-md-4 mt-5">
		  <div class="card text-center">
			<img class="card-img-top" style="height: 200px;" src="laksa.jpg" alt="Card image cap">
			<div class="card-body" id="card">
			  <h5 class="card-title">Laksa By D'Uwais</h5>
			</div>
			<div class="card-footer text-muted">
			  <div class="row">
				<div class="col">
				  <a href="https://goo.gl/maps/eJhy2GwQEyRtLYyz5"><i class="fas fa-map" data-toggle="tooltip" data-placement="top" title="View Location" ></i></a>
				</div>
				<div class="col">
				  <a href="#Modal1" data-toggle="modal" data-target="#Modal1"><i class="fas fa-phone" data-toggle="tooltip" data-placement="top" title="Phone Number"></i></a>
				</div>
			  </div>
			</div>
		  </div>
		</div>
		
		<div class="col-md-4 mt-5">
		  <div class="card text-center">
			<img class="card-img-top" style="height: 200px;" src="canai.jpg" alt="Card image cap">
			<div class="card-body" id="card">
			  <h5 class="card-title">Roti Canai Gemas Road</h5>
			</div>
			<div class="card-footer text-muted">
			  <div class="row">
				<div class="col">
				  <a href="https://g.page/roticanaigemasroad?share"><i class="fas fa-map" data-toggle="tooltip" data-placement="top" title="View Location" ></i></a>
				</div>
				<div class="col">
				  <a href="#Modal2" data-toggle="modal" data-target="#Modal2"><i class="fas fa-phone" data-toggle="tooltip" data-placement="top" title="Phone Number"></i></a>
				</div>
			  </div>
			</div>
		  </div>
		</div>
		
		<div class="col-md-4 mt-5">
		  <div class="card text-center">
			<img class="card-img-top" style="height: 200px;" src="nasikandar.jpg" alt="Card image cap">
			<div class="card-body" id="card">
			  <h5 class="card-title">Nasi Kandar by Deens Maju</h5>
			</div>
			<div class="card-footer text-muted">
			  <div class="row">
				<div class="col">
				  <a href="https://goo.gl/maps/pE5kUU8e2VAxNXMb6"><i class="fas fa-map" data-toggle="tooltip" data-placement="top" title="View Location" ></i></a>
				</div>
				<div class="col">
				   <a href="#Modal3" data-toggle="modal" data-target="#Modal3"><i class="fas fa-phone" data-toggle="tooltip" data-placement="top" title="Phone Number "></i></a>
				</div>
			  </div>
			</div>
		  </div>
		</div>
		
		<div class="col-md-4 mt-5">
		  <div class="card text-center">
			<img class="card-img-top" style="height: 200px;" src="char.jpg" alt="Card image cap">
			<div class="card-body" id="card">
			  <h5 class="card-title">Sany Char Koay Teow</h5>
			</div>
			<div class="card-footer text-muted">
			  <div class="row">
				<div class="col">
				  <a href="https://goo.gl/maps/sYcS2JkuGLixsmvH7"><i class="fas fa-map" data-toggle="tooltip" data-placement="top" title="View Location" ></i></a>
				</div>
				<div class="col">
				   <a href="#Modal4" data-toggle="modal" data-target="#Modal4"><i class="fas fa-phone" data-toggle="tooltip" data-placement="top" title="Phone Number "></i></a>
				</div>
			  </div>
			</div>
		  </div>
		</div>
		
		<div class="col-md-4 mt-5">
		  <div class="card text-center">
			<img class="card-img-top" style="height: 200px;" src="cendol.jpg" alt="Card image cap">
			<div class="card-body" id="card">
			  <h5 class="card-title">Teochew Cendol</h5>
			</div>
			<div class="card-footer text-muted">
			  <div class="row">
				<div class="col">
				  <a href="https://goo.gl/maps/GW5DXYL1pwY1Ratg8"><i class="fas fa-map" data-toggle="tooltip" data-placement="top" title="View Location" ></i></a>
				</div>
				<div class="col">
				   <a href="#Modal5" data-toggle="modal" data-target="#Modal5"><i class="fas fa-phone" data-toggle="tooltip" data-placement="top" title="Phone Number "></i></a>
				</div>
			  </div>
			</div>
		  </div>
		</div>
		
		<div class="col-md-4 mt-5">
		  <div class="card text-center">
			<img class="card-img-top" style="height: 200px;" src="mee.jpg" alt="Card image cap">
			<div class="card-body" id="card">
			  <h5 class="card-title">Mee Sotong By Hameed Pata</h5>
			</div>
			<div class="card-footer text-muted">
			  <div class="row">
				<div class="col">
				  <a href="https://goo.gl/maps/TBtyq6hmEscUNuQY8"><i class="fas fa-map" data-toggle="tooltip" data-placement="top" title="View Location" ></i></a>
				</div>
				<div class="col">
				   <a href="#Modal6" data-toggle="modal" data-target="#Modal6"><i class="fas fa-phone" data-toggle="tooltip" data-placement="top" title="Phone Number "></i></a>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
<br>

<!----------------------------------------------------------Contact 1---------------------------------------------------------------------->
	<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="ModalTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="ModalTitle">Contact Number :</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<center>D'Uwais Corner</center>
			<center>+60174492290<center>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  </div>
		</div>
	  </div>
	</div>
	
	<!----------------------------------------------------------Contact 2---------------------------------------------------------------------->
	<div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="ModalTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="ModalTitle">Contact Number :</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<center>Roti Canai Gemas Road</center>
			<center>+60164345786<center>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  </div>
		</div>
	  </div>
	</div>


<!----------------------------------------------------------Contact 3---------------------------------------------------------------------->
	<div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="ModalTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="ModalTitle">Contact Number :</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<center>Deens Maju Nasi Kandar</center>
			<center>+60124252421<center>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  </div>
		</div>
	  </div>
	</div>
	
	<!----------------------------------------------------------Contact 4---------------------------------------------------------------------->
	<div class="modal fade" id="Modal4" tabindex="-1" role="dialog" aria-labelledby="ModalTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="ModalTitle">Contact Number :</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<center>Sany Char Kuay Teow</center>
			<center>+60124709355<center>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  </div>
		</div>
	  </div>
	</div>
	
	<!----------------------------------------------------------Contact 5---------------------------------------------------------------------->
	<div class="modal fade" id="Modal5" tabindex="-1" role="dialog" aria-labelledby="ModalTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="ModalTitle">Contact Number :</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<center>Penang Road Famous Teochew Cendol</center>
			<center>+60124709355<center>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  </div>
		</div>
	  </div>
	</div>
	
	<!----------------------------------------------------------Contact 6---------------------------------------------------------------------->
	<div class="modal fade" id="Modal6" tabindex="-1" role="dialog" aria-labelledby="ModalTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="ModalTitle">Contact Number :</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<center>Hameed Pata Mee Sotong</center>
			<center>+60134319384<center>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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