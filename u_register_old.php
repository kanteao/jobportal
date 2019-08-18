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
		$fname=$_GET['fname'];
		$lname=$_GET['lname'];
		$email=$_GET['email'];
		$fresher=$_GET['fresher'];
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
	 	<?php 
	 if($fresher==yes)
	 	{
	 		?>
	 		<script src="jquery.js"></script>
			 <?php
		}
	else
		{
		?>
	 		<script src="jquery.js"></script>
			 <?php
		}
		?>
</head>
<body style="background: url('images/register-page.jpg');">

<div class="row" style="margin-top: 5%;opacity: 0.8">
	<div class="col-sm-6 col-sm-offset-3">


      <div id="my-slider" class="carousel slide" data-ride="carousel" data-interval="false">
        <ol class="carousel-indicators" style="position:absolute;top: -30px;">
        <li data-target="#my-slider" data-slide-to="0" class="active"></li>
        <li data-target="#my-slider" data-slide-to="1"></li>
        <?php 
		if ($fresher=="no")
			{
				echo "<li data-target='#my-slider' data-slide-to='2'></li>";
			}
		?>
        </ol>

<div class="carousel-inner" role="listbox">
        
        
    <div class="item active">
            
        <div class="tab-pane fade in active" id="home" style="height:350px;background:rgb(245, 245, 240);color:gray;padding-left:5%;padding-top:3%;z-index: 30;">
		<form action="u_register.php?fname=<?php echo $fname?>&email=<?php echo $email?>&lname=<?php echo $lname?>&fresher=<?php echo $fresher?>#menu1" method="post" enctype="multipart/form-data">
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"> name</i></span>
			<input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo $fname . ' ' . $lname;?>
			" required="required" >
			</div><br>
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"> email</i></span>
			<input type="text" class="form-control" placeholder="email" name="email" value="<?php echo $email?>" required="required" >
			</div><br>
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"> Password</i></span>
			<input type="text" class="form-control" placeholder="password" name="password" required="required" >
			</div><br>
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"> Photo</i></span>
			<input type="file" class="form-control" placeholder="Recruiter Name" name="photo" required="required" >
			</div><br>
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"> Upload CV</i></span>
			<input type="file" class="form-control" name="cv" required="required" >
			</div><br>
			<input type="submit" class="btn btn-lg btn-info right carousel-control" href="#my-slider" role="button" data-slide="next" name="Next" value="Next"  style="height:50px;width:100px;position: absolute;top: 280px;right: 20px;" required="required" >
		</form>
		</div>
        <div class="carousel-caption" style="position: absolute;bottom: 0px;color: lightblue;">
        <h3>Personal Data</h3>
        </div>
    </div>
          

		
	<div class="item">	
		<div id="menu2" style="height:400px;background:rgb(245, 245, 240);color:gray;padding-left:5%;padding-top:3%;z-index: 30;">
			
			<form action="" method="post">
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
			<input type="text" class="form-control" placeholder="Highest Qualification" name="high_qual" required="required" >
			</div><br>
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
			<input type="text" class="form-control" placeholder="Course" name="course" required="required" >
			</div><br>
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
			<input type="text" class="form-control" placeholder="specialization" name="special" required="required" >
			</div><br>
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
			<input type="text" class="form-control" placeholder="University/College" name="univ" required="required" >
			</div><br>
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
			<input type="text" class="form-control" placeholder="Course Type" name="course_type" required="required" >
			</div><br>
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
			<input type="text" class="form-control" placeholder="Passing Year" name="pass_year" required="required" >
			</div><br>
			<input type="submit" class="btn btn-lg btn-warning right carousel-control" href="#my-slider" role="button" data-slide="next" name="Next" value="Next" required="required" style="height:50px;width:100px;position: absolute;top: 330px;right: 20px;" >
			
			</form>
		</div>
		<div class="carousel-caption" style="position: absolute;bottom: 0px;color: lightblue;">
             <h3>Education</h3>
        </div>

	</div>
<?php 
if($fresher=='no')
{
	?>
	<div class="item">
            <div id="menu1" style="height:400px;background:rgb(245, 245, 240);color:gray;padding-left:5%;padding-top:3%;">
			
			<form action="u_register.php?fname=<?php echo $fname?>&email=<?php echo $email?>&lname=<?php echo $lname?>&fresher=<?php echo $fresher?>#menu2" method="post">
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
			<input type="text" class="form-control" placeholder="Current Designation" name="cur_designation" required="required" >
			</div><br>
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
			<input type="text" class="form-control" placeholder="Curent Company" name="cur_company" required="required" >
			</div><br>
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
			<input type="number" class="form-control" placeholder="Annual Salary" name="salary" required="required" >
			</div><br>
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
			<input type="number" class="form-control" placeholder="Years of experience" name="experience" required="required" >
			</div><br>
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
			<input type="date" class="form-control" placeholder="working Since" name="start_date" required="required" >
			</div><br>
			<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
			<input type="text" class="form-control" placeholder="Current Location" name="cur_location" required="required" >
			</div><br>
			<input type="submit" class="btn btn-lg btn-success" name="Register" value="register" style="height:50px;width:100px;">
			</form>
		</div>
            <div class="carousel-caption" style="position: absolute;bottom: 0px;color: lightblue;">
             <h3>Experience</h3>
            </div>
    </div>
<?php
}
?>
	</div>
	<?php
	if(isset($_POST['Register']))
	{

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$photo=$_POST['photo'];
$cv=$_POST['cv'];
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

$query="INSERT INTO recruiter (name,email,password,photo,cv,high_qual,course,special,univ,course_type,passing_year,cur_designation,cur_company,salary,experience,start_date,cur_location) VALUES ('{$name}','{$email}','{$password}','{$photo}','{$cv}','{$high_qual}','{$course}','{$special}','{$univ}','{$course_type}',{$pass_year},'{$cur_designation}',{$cur_company}),{$salary},{$experience},'{$start_date}','{$cur_location}'";
$result=mysqli_query($con,$query);
if($result)
{
  ?>
<script>
alert("sign up successful");
</script>
<?php
}
else
{
?>
<script>
alert("sign up fail");
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