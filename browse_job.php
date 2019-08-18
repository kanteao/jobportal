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

              $search=$_SESSION['comp_name'];
              $query="SELECT * FROM job where expire_date >= CURDATE() and rec_name like '%$search%'";
              $result=mysqli_query($con,$query);
              echo $query;

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
            <li><a href="add_job.php"><span class="glyphicon glyphicon-globe"></span><br>
            Add Job</a>
            </li>
            <li class="active"><a href="browse_job.php"><span class="glyphicon glyphicon-user"></span><br>
            Browse Jobs</a>
            </li>
            <li><a href="search_cand.php"><span class="glyphicon glyphicon-search"></span><br>
            Search Candidate</a>  
            </li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-arrow-up"></span><br>
            log out</a>
            </li>
          </ul>
       </div>

 </nav>

<div class="container-fluid" style="background: url('images/bbb.jpg');height: 600px">
<div class="row" style="text-align:center;">

	<form action="search.php" method="get">
    	<input type="search" class=" in" name="search" placeholder="Search for a job" required="required" style="width: 500px;margin-top: 60px;margin-bottom: 60px;border-radius: 5px;height:50px;border: double 3px lightgreen;text-align: center;">
    	<input type="submit" class="btn btn-info btn-lg" value="Search" class="form-control">
    </form>
 </div>
 <div class="row">
 <div class="col-xs-10 col-xs-offset-1">
 <?php
 $i=mysqli_num_rows($result);
 if($i==0)
 {
?>
<h1 style="color: red;font-weight: bold;text-align: center;">Result Not Found</h1>
<?php
 }
 else
 {

 ?>
<table class="table table-stripped" style="color: black;font-weight: bold;text-shadow: 5px 8px 1px gray;text-align: center;">
			<tr>
			<td>Job Title</td>
			<td>Company</td>
			<td>Salary</td>
			<td>Experience</td>
			<td>Job Location</td>
			<td>Apply</td>
			</tr>
      		<?php
      		while($row=mysqli_fetch_assoc($result))
      		{
      			?>
      		<tr>
      		<td><?php echo $row['jobname'];?></td>
      		<td><?php echo $row['rec_name'];?></td>
      		<td><?php echo $row['salary'];?></td>
      		<td><?php echo $row['experience'];?></td>
      		<td><?php echo $row['location'];?></td>
      		<td><a href="browse_job_desc.php?job_id=<?php echo $row['id']?>"><button class="btn btn-sm btn-info">More Info</button></a></td>
      		</tr>
      		<?php
      		}
      		?>
</table>
<?php
}
?>
</div>
</div>
</div>
<?php
include_once("footer.php");
?>