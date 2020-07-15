<?php
include"db.php";
if (isset($_POST['gender'])) {
	$gender =$_POST['gender'];
	
	if (isset($_COOKIE['gender'])) {
		echo "Already cookie ".$_COOKIE['gender'];
	}
	else{
		setcookie('gender',$gender,time()+15);
		echo "Thanku setting for cookie ";

		$sql1="insert into users(gender)values('$gender')";
    	mysqli_query($conn,$sql1);

	}

}






?>


<!DOCTYPE html>
<html>
<head>
	<title>cookie</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
  <div class="row">
    <div class="col-sm-12">
	<form method="post">


<div class="jumbotron text-center">

		<h2>Select Your Gender:</h2>

		<input type="submit" class="btn btn-warning" name="gender" value="Male">

		<input type="submit" class="btn btn-danger" name="gender" value="Female">
	</div>
		
	</form>

</div>
</div>
</div>
</body>
</html>