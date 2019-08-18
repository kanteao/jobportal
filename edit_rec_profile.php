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
<?php

if(isset($_SESSION['userid']))
	{
		$id=$_SESSION['userid'];
		$query1="SELECT * FROM user";
$result1=mysqli_query($con,$query1);
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
	 <script src="jquery.js"></script>

</head>
<body style="background: url('images/register-page.jpg');">
	
<?php
			if ($result1)
				{
					if($user=mysqli_fetch_assoc($result1))
					{
				
			?>
<form action="edit_rec_profile.php" method="post" enctype="multipart/form-data">
<div class="row" style="margin-top: 5%;opacity: 0.8">
	<div class="col-sm-6 col-sm-offset-3">
        
           
        <div class="" id="home" style="height:400px;background:rgb(245, 245, 240);color:gray;padding-left:5%;padding-top:3%;z-index: 30;text-align: center;">
        <h3 style="display: inline-block;">Personal Information </h3>
			<span class="badge" style="background: lightblue;">1</span>
			<span class="badge">2</span>
			<span class="badge">3</span>
			
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"> name</i></span>
			<input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo $user['name'];?>
			" required="required" >
			</div><br>
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"> email</i></span>
			<input type="text" class="form-control" placeholder="email" name="email" value="<?php echo $user['email'];?>
			" required="required" >
			</div><br>
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"> Password</i></span>
			<input type="password" class="form-control" placeholder="password" name="password" id="password" value="<?php echo $user['password'];?>
			" required="required" >
			</div><br>
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"> Photo</i></span>
			<input type="file" class="form-control" placeholder="Recruiter Name" name="photo" id="photo" required="required" >
			</div><br>
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"> Upload CV</i></span>
			<input type="file" class="form-control" name="cv" id="cv" required="required">
			</div><br>
			<input type="button" class="btn btn-lg btn-success" role="button" name="Next" value="Next"  id="home_next" style="height:50px;width:100px;position: absolute;top: 330px;right: 20px;" >
			<input type="button" class="btn btn-lg btn-warning" role="button" name="prev" value="Last"  id="home_prev" style="height:50px;width:100px;position: absolute;top: 330px;right: 150px;" >
		
		</div>
          	
		<div id="menu2" style="height:450px;background:rgb(245, 245, 240);color:gray;padding-left:5%;padding-top:3%;z-index: 30;text-align: center;">
			<h3 style="display: inline-block;">Education </h3>
			<span class="badge" >1</span>
			<span class="badge" style="background: lightblue;">2</span>
			<span class="badge">3</span>
			
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
			<input type="text" class="form-control" placeholder="Highest Qualification" name="high_qual" required="required" value="<?php echo $user['high_qual'];?>
			" >
			</div><br>
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
			<input type="text" class="form-control" placeholder="Course" name="course" required="required" value="<?php echo $user['course'];?>
			">
			</div><br>
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
			<input type="text" class="form-control" placeholder="specialization" name="special" required="required" value="<?php echo $user['special'];?>
			">
			</div><br>
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
			<input type="text" class="form-control" placeholder="University/College" name="univ" required="required" value="<?php echo $user['univ'];?>
			">
			</div><br>
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
			<input type="text" class="form-control" placeholder="Course Type" name="course_type" required="required" value="<?php echo $user['course_type'];?>
			" >
			</div><br>
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
			<input type="text" class="form-control" placeholder="Passing Year" name="pass_year" required="required" value="<?php echo $user['passing_year'];?>
			" >
			</div><br>
			<input type="button" class="btn btn-lg btn-success" name="Next" value="Next" id="menu2_next" style="height:50px;width:100px;position: absolute;top: 400px;right: 20px;" >
			
			<input type="button" class="btn btn-lg btn-warning" role="button" name="prev" value="Prev"  id="menu2_prev" style="height:50px;width:100px;position: absolute;top: 400px;right: 150px;" >
		</div>


        <div id="menu1" style="height:450px;background:rgb(245, 245, 240);color:gray;padding-left:5%;padding-top:3%;text-align:center;">
            <h3 style="display: inline-block;">Experience </h3>
			<span class="badge">1</span>
			<span class="badge">2</span>
			<span class="badge" style="background: lightblue;">3</span>
			
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
			<input type="text" class="form-control" placeholder="Current Designation" name="cur_designation" required="required" value="<?php echo $user['cur_designation'];?>
			">
			</div><br>
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
			<input type="text" class="form-control" placeholder="Curent Company" name="cur_company" required="required" value="<?php echo $user['cur_company'];?>
			">
			</div><br>
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
			<input type="number" class="form-control" placeholder="Annual Salary" name="salary" required="required" value="<?php echo $user['salary'];?>
			">
			</div><br>
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
			<input type="number" class="form-control" placeholder="Years of experience" name="experience" required="required" value="<?php echo $user['experience'];?>
			">
			</div><br>
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
			<input type="date" class="form-control" placeholder="working Since" name="start_date" required="required" value="<?php echo $user['start_date'];?>
			">
			</div><br>
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
			<input type="text" class="form-control" placeholder="Current Location" name="cur_location" required="required" value="<?php echo $user['cur_location'];?>
			">
			</div><br>
			<input type="submit" class="btn btn-lg btn-success" name="Register" value="register" style="height:50px;width:100px;">
			<input type="button" class="btn btn-lg btn-danger" role="button" name="prev" value="First"  id="menu1_first" style="height:50px;width:100px;position: absolute;top: 400px;right: 20px;" >
			<input type="button" class="btn btn-lg btn-warning" role="button" name="prev" value="Prev"  id="menu1_prev" style="height:50px;width:100px;position: absolute;top: 400px;left: 20px;" >
		</div>

	</div>
</div>
</form>
<?php
}
}
?>

	<?php
	if(isset($_POST['Register']))
	{

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$photo=mysql_real_escape_string(file_get_contents($_FILES["photo"]["tmp_name"]));
$cv=mysql_real_escape_string(file_get_contents($_FILES["cv"]["tmp_name"]));
$high_qual=$_POST['high_qual'];
$course=$_POST['course'];
$special=$_POST['special'];
$univ=$_POST['univ'];
$course_type=$_POST['course_type'];
$pass_year=$_POST['pass_year'];
$cur_designation=$_POST['cur_designation'];
$cur_company=$_POST['cur_company'];
$salary=$_POST['salary'];
$experience=$_POST['experience'];
$start_date=$_POST['start_date'];
$cur_location=$_POST['cur_location'];

$query="UPDATE user SET name='{$name}',email='{$email}',password='{$password}',photo='{$photo}',cv='{$cv}',high_qual='{$high_qual}',course='{$course}',special='{$special}',univ='{$univ}',course_type='{$course_type}',passing_year={$pass_year},cur_designation='{$cur_designation}',cur_company='{$cur_company}',salary={$salary},experience={$experience},start_date='{$start_date}',cur_location='{$cur_location}' where id=$id";
echo $query;
$result=mysqli_query($con,$query);
if($result)
{
  ?>
<script>
alert("Profile Edited Successfully");
window.location="index.php";
</script>
<?php
}
else
{
?>
<script>
alert("Profile Edit fail");
window.location="index.php";
</script>
<?php
}
	}
	?>
	 <!--
	 <a  class="left carousel-control" href="#my-slider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        </a>
        <a  class="right carousel-control" href="#my-slider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    </a>
    -->
</div>
</div>
</div>
</body>
</html>