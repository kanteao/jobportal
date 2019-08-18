<?php
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
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	 <link href="css/font-awesome.min.css" rel="stylesheet">
	 <link href="css/bootstrap-social.css" rel="stylesheet">
	 <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  	 <link rel="icon" href="images/favicon.ico" type="image/x-icon">
	 <script src="js/jquery.min.js"></script>
	 <script src="js/bootstrap.min.js"></script>
	<title>Jobportal::Admin Login</title>
</head>
<body style="background:url('images/bbb.jpg');">
<div class="container">
	<div class="row">
	<div class="col-sm-4 col-sm-offset-3" style="position:absolute;top:120px;background:lightblue;color:white;font-size: 20px;font-weight: bold;">
	Admin Login
	</div>
	</div>
	<div class="row" style="position:absolute;top:150px;left:455px;width:455px;background: rgba(240,240,240,0.3);">
	<div class="col-sm-5">
	<img src="images/admin.png" style="opacity: 0.5">
	</div>
	<div class="col-sm-7" style="background:rgba(255,255,255,0.5);">
	<form action="admin_login.php" method="post">
	<br>
	<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
	<input type="mail" placeholder="Admin mail" name="admin_mail" class="form-control" required="required">
	</div>
	<br>
	<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-key"></i></span>
	<input type="password" placeholder="Admin Password" name="admin_psw" class="form-control"required="required">
	</div>
	<br>
	<input type="submit" name="adm_login" class="form-control" value="Login">
	<hr>
	<a href="index.php"><input type="button" class="form-control" value="Home page"></a>
	</form>
	</div>

	</div>

<?php
if(isset($_POST['adm_login']))
{
	$email=$_POST['admin_mail'];
	$password=$_POST['admin_psw'];
	$query="SELECT * FROM admin";
	$result=mysqli_query($con,$query);

	while($row=mysqli_fetch_assoc($result))
	{
		if($email==$row['email'] and $password=$row['password'])
		{
			?>
			<script type="text/javascript">alert("login successfull");
			window.location="admin_zone.php";</script>
			<?php
		}
		else
		{
			?>
			<script type="text/javascript">alert("login failed");</script>
			<?php
		}
	}

}

?>
</div>
</body>
</html>>