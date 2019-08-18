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
include_once("header.php");
?>
<div class="container-fluid" style="background: url('images/bbb.jpg');height: 600px">
<div class="row" style="text-align:center;">
<div class="col-sm-12">
<h1> You applied successfully to the job</h1>
</div>
</div>
<?php
include_once("footer.php");
?>