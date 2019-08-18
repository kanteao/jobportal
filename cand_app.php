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

if (isset($_GET['search']))
              {
                $search=$_GET['search'];
               $query="SELECT * FROM application where username like '%$search%' or jobname like '%$search%'"; 
               
              }
              else
              {
              $query="SELECT * FROM application";
              }
              $result=mysqli_query($con,$query);

?>
<?php 
include_once("admin_header.php");
?>
<div class="container-fluid" style="background: url('images/admin.jpg');height: 600px">
<div class="row" style="text-align:center;">

  <form action="cand_app.php" method="get">
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
<table class="table table-stripped" style="color: black;font-weight: bold;text-align: center;background: rgba(240,240,240,0.3);">
			<tr>
			<td>ID</td>
			<td>Job Name</td>
			<td>Company</td>
			<td>Salary</td>
			<td>Location</td>
			<td>Username</td>
      <td>User Info</td>
      <td>Delete</td>
			</tr>
      		<?php
      		while($row=mysqli_fetch_assoc($result))
      		{
      			?>
      		<tr>
      		<td><?php echo $row['id'];?></td>
      		<td><?php echo $row['jobname'];?></td>
      		<td><?php echo $row['company'];?></td>
      		<td><?php echo $row['salary'];?></td>
      		<td><?php echo $row['location'];?></td>
          <td><?php echo $row['username'];?></td>
      		<td><a href="user_info.php?userid=<?php echo $row['userid']?>"><button class="btn btn-sm btn-info">More Info</button></a></td>
          <td><a href="del_app.php?id=<?php echo $row['id']?>"><button class="btn btn-sm btn-danger">Delete</button></a></td>
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