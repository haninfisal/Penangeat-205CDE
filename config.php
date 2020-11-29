<body>
<?php

if($dbc = mysqli_connect('localhost','root','')) {
	print '<p>Successfully Connected to MySql!</p>';
	
	//try to select database
	if (@mysqli_select_db($dbc, 'register')){
		print '<p>The database has been selected.</p>';
	} else {
		print '<p style="color: red;">Could not select the database because: 
		<br/>' . mysqli_error($dbc) . '.</p>';
	}
		mysqli_close($dbc);
		
	} 
	else {
		print '<p> style="color: red;"> Couldnt Connect to mysql</p>';
	}

?>
</body>