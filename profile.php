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
			  $userid=$_GET['userid'];
              $query="SELECT * FROM user where id={$userid}";
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

 		
 ?>
<div class="col-sm-6" style="height:700px;background:rgba(255,255,255,0.5);font-size: 16px;font-weight: bold;color: black;">
<hr>
<?php echo '<img class="img-rounded" style="height:150px;"src="data:image/jpeg;base64,'.base64_encode($row['photo']).'"  >'; ?><br>
<h4 style="color:gray";><?php echo $row['name'];?></h4>
<hr>
<label>Current designation : </label><?php echo $row['cur_designation'];?><hr><h3 style="font-weight: bold;color:green;"><?php echo $row['high_qual'];?></h3>
<hr>
<label>Salary : </label><?php echo $row['salary'];?><br>
<label>Experience : </label><?php echo $row['experience'];?>
<br>

<label>Current Company : </label><?php echo $row['cur_company'];?><br>
<label>Current Location : </label><?php echo $row['cur_location'];?><hr>
<label>Course : </label><?php echo $row['course'];?>
<br>
<label>Course Type: </label><?php echo $row['course'];?>
<br>
<label>University: </label><?php echo $row['course'];?>
<hr>

</div>
<div class="col-sm-6" style="height:687px;font-weight: bold;background:rgba(255,255,255,0.5);">
<?php 
$content=$row['cv'];
?>
<object data="data:application/pdf;base64,<?php echo base64_encode($content) ?>" type="application/pdf" style="height:100%;width:100%"></object>
</div>
<?php
	}
?>

</div>
</div>
<?php
include_once("footer.php");
?>