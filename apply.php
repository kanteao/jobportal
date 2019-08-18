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
<?php 
include_once("header.php");
?>
<div class="container-fluid apply" style="background: url('images/bbb.jpg');height: 730px">
<div class="row" style="text-align:center;">
<?php
 if($row=mysqli_fetch_assoc($result))
 {
 	$rec_id=$row['rec_id'];
 	$query2="SELECT * FROM recruiter where id={$rec_id}";
    $result2=mysqli_query($con,$query2);
    if($row2=mysqli_fetch_assoc($result2))
 	{
 ?>
<div class="col-sm-4" style="height:700px;background:rgba(255,255,255,0.5);font-size: 16px;font-weight: bold;color: white;">
<hr>
<?php echo '<img class="img-thumbnail" src="data:image/jpeg;base64,'.base64_encode($row2['company_logo']).'"  >'; ?>
<?php echo $row['rec_name'];?>
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

</div>
<div class="col-sm-4" style="height:700px;font-weight: bold;background:rgba(255,255,255,0.5);">
<hr>
<label>Profile : </label><br><?php echo $row['profile'];?><hr>
<label>Education : </label><br><?php echo $row['education'];?><hr>
<label>Job Description : </label><br><div style="height:300px;overflow: scroll;color: darkgreen;text-align: left;"><?php echo $row['job_description'];?></div><hr>
<a id="apply" href="
<?php 
if (isset($_SESSION['userid']))
	{
		echo 'apply_process.php?job_id='. $job_id;
	}
else
	echo '#1';
?>
"><button type ="submit" class="btn btn-lg btn-success" name="apply">Apply</button></a>
<script>
$(document).ready(function(){
	var link=$('#apply').attr('href');
	if (link=='')
	{
		alert("login before job application");
	}
})
</script>
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
<?php echo '<img class="img-circle" style ="height:290px;width:250px;border:ridge 10px lightgray;" src="data:image/jpeg;base64,'.base64_encode($row2['photo']).'"  >'; ?><br>
<h4><?php echo $row2['rec_name'];?></h4><hr>
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