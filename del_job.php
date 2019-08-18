<?php 
session_start();
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="jobportal";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (mysqli_connect_errno())
	{
		die("Database connection failed: " . mysqli_connect_error()."(".mysqli_connect_errno().")");
	}
?>
<?php
$id=$_GET['id'];
$query="DELETE FROM recruiter where id={$id}";
$result=mysqli_query($conn,$query);
echo $query;
if ($result)
{
	echo "success";
}
else
{
	echo "fail";
}
header("location:rec_job.php");
?>