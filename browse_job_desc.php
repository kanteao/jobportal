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
			  $job_id=$_GET['job_id'];
              $query="SELECT * FROM job where id={$job_id}";
              $result=mysqli_query($con,$query);

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

  </style>
  </head>
  <body>
     <nav class="navbar navbar-default">
          <div class="navbar navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="add_job.php" style="padding-top:12px;"><img src="images/company.png" style="height:50px;width:200px;"></a>
          </div>
          <div class="collapse navbar-collapse" id="menu" style="padding-top:10px;">
          <ul class="nav nav-pills nav-justified">
            <li><a href="index.php"><span class="glyphicon glyphicon-home"></span><br>
            <?php
            $comp_name=$_SESSION['comp_name'];
            echo $comp_name;
            ?></a>
            </li>
            <li class="active"><a href="add_job.php"><span class="glyphicon glyphicon-globe"></span><br>
            Add Job</a>
            </li>
            <li><a href=""><span class="glyphicon glyphicon-user"></span><br>
            Browse Jobs</a>
            </li>
            <li><a href=""><span class="glyphicon glyphicon-search"></span><br>
            Search Candidate</a>  
            </li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-arrow-up"></span><br>
            log out</a>
            </li>
          </ul>
       </div>

 </nav>
<div class="container-fluid apply" style="background: url('images/bbb.jpg');height: 730px">
<div class="row" style="text-align:center;">
<?php
 if($row=mysqli_fetch_assoc($result))
 {
 	$rec_id=$row['rec_id'];
 	$query2="SELECT * FROM recruiter where id={$rec_id}";
    $result2=mysqli_query($con,$query2);
    $query3="SELECT * FROM job";
    $result3=mysqli_query($con,$query3);
    if($row2=mysqli_fetch_assoc($result2))
 	{
 		$cur_id=$_GET['job_id'];
 		$last_id=mysqli_num_rows($result3);
 		if($cur_id==1)
 		{
		$prev_id=$last_id;
 		}
 		else
 		{
 		$prev_id=$row['id']-1;	
 		}
 		if($cur_id==$last_id)
 		{
		$next_id=1;
 		}
 		else
 		{
 		$next_id=$row['id']+1;
 		}
 		
 ?>
<div class="col-sm-4" style="height:700px;background:rgba(255,255,255,0.5);font-size: 16px;font-weight: bold;color: black;">
<hr>
<?php echo '<img class="img-thumbnail" style="height:50px;"src="data:image/jpeg;base64,'.base64_encode($row2['company_logo']).'"  >'; ?><br>
<h4 style="color:gray";><?php echo $row['rec_name'];?></h4>
<a href="user_apply.php?jobid=<?php echo $job_id?>"><span style="color:black";>Job Application : </span>
<span class="badge">
  <?php
  $query3="SELECT * FROM application where jobid=$job_id";
  $result3=mysqli_query($con,$query3);
  $k=mysqli_num_rows($result3);
  echo $k;
  ?>
</span></a>
<hr>
<h1 style="font-weight: bold;color:green;"><?php echo $row['jobname'];?></h1>
<hr>
<label>Salary : </label><?php echo $row['salary'];?><br>
<label>Experience : </label><?php echo $row['experience'];?>
<hr>
<label>Industry Type : </label><?php echo $row['industry_type'];?><hr>
<label>Functional Area : </label><?php echo $row['functional_area'];?><hr>
<label>Role Category : </label><?php echo $row['role_category'];?><hr>
<label>role : </label><?php echo $row['role'];?>
<hr>
<a href="browse_job_desc.php?job_id=<?php echo $prev_id?>"><button class="btn btn-lg btn-info">Previous</button></a>
</div>
<div class="col-sm-4" style="height:700px;font-weight: bold;background:rgba(255,255,255,0.5);">
<hr>
<label>Profile : </label><br><?php echo $row['profile'];?><hr>
<label>Education : </label><br><?php echo $row['education'];?><hr>
<label>Job Description : </label><br><div style="height:300px;overflow-y: scroll;color: darkgreen;text-align: left;"><?php echo $row['job_description'];?></div><hr>
</form>
</div>
<div class="col-sm-4" style="height:700px;overflow: hidden;background:rgba(255,255,255,0.5);">
<hr>
<label>Keyskills : </label><br>
<?php echo $row['key_skills'];?>
<hr>
<label>Apply before : </label><?php echo $row['expire_date'];?>
<hr>
<label>Job Posted By </label><br><br>
<?php echo '<img class="img-circle" style ="height:290px;width:250px;" src="data:image/jpeg;base64,'.base64_encode($row2['photo']).'"  >'; ?><br>
<?php echo $row2['rec_name'];?><hr>
<a href="browse_job_desc.php?job_id=<?php echo $next_id?>"><button class="btn btn-lg btn-info">Next</button></a>
</div>
<?php
	}
}
?>

</div>
</div>
<?php
include_once("footer.php");
?>