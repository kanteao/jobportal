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
               $query="SELECT * FROM user where name like '%$search%'"; 
               
              }
              else
              {
              $query="SELECT * FROM user";
              }
              $result=mysqli_query($con,$query);

?>
<?php
include_once("admin_header.php")
?>
<div class="container-fluid" style="background: url('images/admin.jpg');height: 500px;">
<div class="row" style="text-align:center;">

	<form action="cand_prof.php" method="get">
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
      <td>Photo</td>
      <td>Mail</td>
      <td>Highest Qualification</td>
      <td>Course</td>
      <td>Passing Year</td>
      <td>Current Designation</td>
      <td>Current Comapny</td>
      <td>Salary</td>
      <td>View RESUME</td>
      <td>Delete</td>
      </tr>
          <?php
          while($row=mysqli_fetch_assoc($result))
          {
            ?>
          <tr>
          <td><?php echo '<img class="img-thumbnail" style="height:70px;"src="data:image/jpeg;base64,'.base64_encode($row['photo']).'"  >'; ?></td>
          <td><?php echo $row['email'];?></td>
          <td><?php echo $row['high_qual'];?></td>
          <td><?php echo $row['course'];?></td>
          <td><?php echo $row['passing_year'];?></td>
          <td><?php echo $row['cur_designation'];?></td>
          <td><?php echo $row['cur_company'];?></td>
          <td><?php echo $row['salary'];?></td>
          <td><a href="user_info.php?userid=<?php echo $row['id']?>"><button class="btn btn-sm btn-info">More Info</button></a></td>
          <td><a href="del_user.php?id=<?php echo $row['id']?>"><button class="btn btn-sm btn-danger">Delete</button></a></td>
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