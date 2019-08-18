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
$query="SELECT cv from user where id=$userid";
$result=mysqli_query($con,$query);
if($row=mysqli_fetch_assoc($result))
{
	$content=$row['cv'];
	?>
	<object data="data:application/pdf;base64,<?php echo base64_encode($content) ?>" type="application/pdf" style="height:100%;width:100%"></object>
	
<?php
}
?>
