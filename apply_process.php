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
$query="SELECT * FROM job where id=$job_id";
$result=mysqli_query($con,$query);
if($row=mysqli_fetch_assoc($result))
{
	$jobname=$row['jobname'];
	$company=$row['rec_name'];
	$salary=$row['salary'];
	$location=$row['location'];
	$userid=$_SESSION['userid'];
	$username=$_SESSION['name'];
	$query="INSERT INTO application (jobid,jobname,company,salary,location,userid,username) VALUES ({$job_id},'{$jobname}','{$company}',$salary,'{$location}',{$userid},'{$username}')";
	$result=mysqli_query($con,$query);
}
echo $query;
header("location:/jobportal/success.php");
?>
