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

if(isset($_GET['jobid']))
	{
		$search=$_GET['jobid'];
		$query="SELECT * FROM application where jobid=$search";
	}
              
              
              $result=mysqli_query($con,$query);

?>
<?php 
include_once("header.php");
?>
<div class="container-fluid" style="background: url('images/bbb.jpg');height: 600px">
<div class="row" style="text-align:center;">

	
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
			<td>ID</td>
			<td>Job Name</td>
			<td>Company</td>
			<td>Salary</td>
			<td>Location</td>
			<td>Username</td>
      <td>User Info</td>
			</tr>
      		<?php
      		while($row=mysqli_fetch_assoc($result))
      		{
      			?>
      		<tr>
      		<td><?php echo $row['jobid'];?></td>
      		<td><?php echo $row['jobname'];?></td>
      		<td><?php echo $row['company'];?></td>
      		<td><?php echo $row['salary'];?></td>
      		<td><?php echo $row['location'];?></td>
          <td><?php echo $row['username'];?></td>
      		<td><a href="user_info.php?userid=<?php echo $row['userid']?>"><button class="btn btn-sm btn-info">More Info</button></a></td>
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