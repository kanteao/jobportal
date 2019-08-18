<?php
session_start();
$dbhost="localhost";
$db="jobportal";
$user="root";
$password="";
$con=mysqli_connect($dbhost,$user,$password,$db);
if(!$con)
{
  die("Connection failed");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Jossy.com</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	 <link href="css/font-awesome.min.css" rel="stylesheet">
	 <link href="css/bootstrap-social.css" rel="stylesheet">
	 <script src="js/jquery.min.js"></script>
	 <script src="js/bootstrap.min.js"></script>
	<style type="text/css">
		button{width:200px;height:120px;}
		button a{color:white;font-weight: bold;font-family: 'arial black',cursive;}
		.content{width:450px;opacity: 0.7;border:solid 5px rgba(50,50,50,0.5);}
		hr{border: double 3px gray;}
		body{background: url('images/bbb.jpg');}

	</style>
</head>
<body>
<div class="container content">
	<div class="row ">
		<img src="images/recruiter.png" style="margin-left:50px;">
	</div>
	<div class="row ">
		<div class="col-sm-6">
		<button class="btn btn-success btn-lg"><a href="add_job.php">Add Job</a></button>
		</div>
		<div class="col-sm-6">
		<button class="btn btn-primary btn-lg"><a href="browse_job.php">Browse Jobs</a></button>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-sm-6">
		<button class="btn btn-warning btn-lg"><a href="search_cand.php">Search Candidate</a></button>
		</div>
		<div class="col-sm-6">
		<button class="btn btn-danger btn-lg"><a href="logout.php">Log out</a></button>
		</div>
	</div>
</div>
</body>
</html>>