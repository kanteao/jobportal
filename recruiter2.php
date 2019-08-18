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

              $query="SELECT * FROM recruiter";
              $result=mysqli_query($con,$query);

?>
<?php 
include_once("admin_header.php");
?>
<div class="container-fluid" style="background: url('images/back4.jpg');">

<?php
$j=0;
while($row=mysqli_fetch_assoc($result))
{
	foreach($row as $colname=>$value)
	{
		$a[$j][$colname]=$value;
	}
	$j++;
}
$n=mysqli_num_rows($result);
for($i=0;$i<$n;$i++)
{
?>

<div class="row">

<div class="col-sm-5 col-sm-offset-1">	
<div  class="rec" style="height:450px;width:450px;border-radius:5px;box-shadow: 10px 10px 10px gray;text-align:center;font-size: 14px;font-family: 'arial black',monospace;color:gray;">
<h1 style="color:white;background: pink;height:50px;"><?php echo $a[$i]['rec_name'];?></h1><br>
<?php echo '<img class="ph img img-circle" style="width:150px;height:150px;border:outset 10px lightgray;" src="data:image/jpeg;base64,'.base64_encode($a[$i]["photo"]).'">'?><hr>
Recruiter Position : <?php echo $a[$i]['rec_position'];?><hr>
Compamy Name : <?php echo $a[$i]['company_name'];?><hr>
<a href="search.php?rec_id=<?php echo $a[$i]['id']?>"><input type="button" class="btn btn-default btn-lg" value="View Job"></a>
<a href="delete.php?id=<?php echo $a[$i]['id']?>"><input type="button" class="btn btn-info btn-lg" value="Delete"></a>
</div>
</div>
<?php
$i++;

if($i<$n)
{
?>
<div class="col-sm-6">	
<div class="rec" style="height:450px;width:450px;border-radius:5px;box-shadow: 10px 10px 10px gray;text-align:center;font-size: 14px;font-family: 'arial black',monospace;color:gray;">
<h1 style="color:white;background: pink;height:50px;"><?php echo $a[$i]['rec_name'];?></h1><br>
<?php echo '<img class="ph img img-circle" style="width:150px;height:150px;border:outset 10px lightgray;" src="data:image/jpeg;base64,'.base64_encode($a[$i]["photo"]).'">'?><hr>
Recruiter Position : <?php echo $a[$i]['rec_position'];?><hr>
Compamy Name : <?php echo $a[$i]['company_name'];?><hr>
<a href="search.php?id=<?php echo $a[$i]['id']?>"><input type="button" class="btn btn-default btn-lg" value="View Job"></a>
<a href="delete.php?rec_id=<?php echo $a[$i]['id']?>"><input type="button" class="btn btn-info btn-lg" value="Delete"></a>
</div>
</div>
</div>
<br>
<?php
}
}
?>
</div>
<br>