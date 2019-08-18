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

if(isset($_GET['search']))
	{
		$search=$_GET['search'];
		$query="SELECT * FROM job where expire_date >= CURDATE() and (jobname like '%$search%' or location like '%$search%' or rec_name like '%$search%')";
	}
else
{
	$search=$_GET['rec_id'];
	$query="SELECT * FROM job where rec_id=$search";
}
              
              
              $result=mysqli_query($con,$query);

?>
<?php 
include_once("header.php");
?>
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
      		<td><a href="apply.php?job_id=<?php echo $row['id']?>"><button class="btn btn-sm btn-info">More Info</button></a></td>
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