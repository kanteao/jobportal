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
$query1="SELECT * FROM job where id=$job_id";
$result1=mysqli_query($con,$query1);

?>
<!DOCTYPE html>
<html>
<head>
       <title>Jossy.com</title>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="css/bootstrap.min.css" rel="stylesheet">
       <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/bootstrap-social.css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
       <style type="text/css">

       </style>
       </head>
       <body>
               <nav class="navbar navbar-default">
                     <div class="navbar navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                                   <span class="sr-only">Toggle navigation</span>
                                   <span class="icon-bar"></span>
                                   <span class="icon-bar"></span>
                                   <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="add_job.php" style="padding-top:12px;"><img src="images/company.png" style="height:50px;width:200px;"></a>
                     </div>
                     <div class="collapse navbar-collapse" id="menu" style="padding-top:10px;">
                     <ul class="nav nav-pills nav-justified">
                            <li><a href="index.php"><span class="glyphicon glyphicon-home"></span><br>
                            <?php
                            $comp_name=$_SESSION['comp_name'];
                            echo $comp_name;
                            ?></a>
                            </li>
                            <li class="active"><a href="add_job.php"><span class="glyphicon glyphicon-globe"></span><br>
                            Add Job</a>
                            </li>
                            <li><a href=""><span class="glyphicon glyphicon-user"></span><br>
                            Browse Jobs</a>
                            </li>
                            <li><a href=""><span class="glyphicon glyphicon-search"></span><br>
                            Search Candidate</a> 
                            </li>
                            <li><a href="logout.php"><span class="glyphicon glyphicon-arrow-up"></span><br>
                            log out</a>
                            </li>
                     </ul>
       </div>

 </nav>


 <div class="container">
       <div class="row">
              <div class="col-sm-4" style="height:300px;background: rgb(245, 245, 240);height: 430px;width: 30%;padding-top: 20px;text-align: center;">
              <img src="images/company.png" style="height:50px;width:200px;">
              <img src="images/addjob.png" style="height: 300px;">
              <h3 class="text-danger" style="font-weight: bold;font-family:verdana,cursive;">Add New Job</h3>
              </div>
<?php
if($row=mysqli_fetch_assoc($result1))
{
?>
                     <form action="add_job.php" method="post">
              <div class="col-sm-4">
                                   <div class="input-group"><span class="input-group-addon"><i class="fa fa-briefcase-o"></i></span>
                                                 <input type="text" class="form-control" placeholder="Job Name" name="job_name" required="required" value="<?php echo $row['jobname']?>">
                                          </div><hr>
                                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-bullseye"></i></span>
                                                 <textarea cols="20" rows="4" class="form-control" placeholder="Job Description" name="job_desc" required="required" style="resize: none;" <?php echo $row['job_description']?>"></textarea>
                                          </div>
                                          <hr>
                                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                                 <input type="number" class="form-control" placeholder="Salary" name="salary" required="required" <?php echo $row['salary']?>">
                                          </div>
                                          <hr>
                                           <div class="input-group"><span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                                                 <select name="industry_type" class="form-control" required="required" <?php echo $row['industry_type']?>">
                                                   <option value="Company">Company</option>
                                                 <option value="consultant">Consultant</option>
                                                 </select>
                                          </div>
                                          <hr>
                                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                                                 <input type="text" class="form-control" placeholder="Functional Area" name="func_area" required="required" <?php echo $row['functional_area']?>">
                                          </div>
                                          <hr>
                                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-thumb-tack"></i></span>
                                                 <input type="text" class="form-control" placeholder="Role_category" name="role_cat" required="required" <?php echo $row['role_category']?>">
                                          </div><hr>
                                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-thumb-tack"></i></span>
                                                 <input type="date" class="form-control" value="
                                                 <?php
                                                 $a=date();
                                                 echo $a;
                                                 ?>
                                                 " name="post_date" required="required">
                                          </div>
                                          <hr>
              </div>

              <div class="col-sm-4">
                                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-building"></i></span>
                                          <input type="text" class="form-control" placeholder="Experience in years" name="experience" required="required" <?php echo $row['experience']?>">
                                          </div><hr>
                                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-building"></i></span>
                                          <input type="text" class="form-control" placeholder="Role" name="role" required="required" <?php echo $row['role']?>">
                                          </div>
                                          <hr>
                                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-key"></i></span>
                                          <input type="text" class="form-control" placeholder="Key Skills" name="keyskills" required="required" <?php echo $row['keyskills']?>">
                                          </div>
                                          <hr>
                                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-industry"></i></span>
                                          <textarea cols="20" rows="4" class="form-control" placeholder="Desired Candidate profile" name="profile" required="required" style="resize: none;" <?php echo $row['profile']?>"></textarea>
                                          </div>
                                          <hr>
                                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                          <input type="text" class="form-control" placeholder="Education" name="education" required="required" <?php echo $row['education']?>">
                                          </div>
                                          <hr>
                                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                          <input type="date" class="form-control" placeholder="Expire_date" name="exp_date" required="required" <?php echo $row['expire_date']?>">
                                          </div>
                                          <hr>
                                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-map"></i></span>
                                          <input type="text" class="form-control" placeholder="Job Location" name="location" required="required" <?php echo $row['location']?>">
                                          </div>
                                          <hr>
                                          <input type="submit" class="btn btn-md btn-info" value="Add Job" name="addjob" required="required">
                                          <hr>
                     </div>
          
              </form>

              <?php
if(isset($_POST['addjob']))
{
       $jobname=$_POST['job_name'];
       $job_desc=$_POST['job_desc'];
       $salary=$_POST["salary"];
       $industry_type=$_POST["industry_type"];
$func_area=$_POST['func_area'];
$role_cat=$_POST['role_cat'];
$post_date=$_POST['post_date'];
$experience=$_POST['experience'];
$role=$_POST['role'];
$keyskills=$_POST['keyskills'];
$profile=$_POST['profile'];
$education=$_POST['education'];
$expire_date=$_POST['exp_date'];
$rec_id=$_SESSION['rec_id'];
$rec_name=$_SESSION['comp_name'];
$location=$_POST['location'];
 $query="UPDATE job SET 
 jobname='{$jobname}' and 
 job_description='{$job_desc}' and 
 salary={$salary} and
 industry_type='{$industry_type}' and
 functional_area='{$func_area}' and 
 role_category='{$role_cat}'and
 post_date='{$post_date}' and
 experience={$experience} and
 role='{$role}' and
 key_skills='{$keyskills}'and
 profile='{$profile}' and 
 education='{$education}' and
 expire_date='{$expire_date}' and
 location='{$location}'";
$result=mysqli_query($con,$query);
if($result)
{
  ?>
<script>
alert("Job edited successful");
</script>
<?php
}
else
{
?>
<script>
alert("Job Add Failed");
</script>
<?php
}
}
?>            
</div>
 </div>

<br>

<div class="container-fluid footer" style="height:300px;background: rgb(245, 245, 240);" >
<div class="row">
       <div class="col-sm-10 col-sm-offset-1">
                     
              <div class="row" style="">
              <div class="col-sm-8">
              <div class="row">
              <div class="col-sm-12">
              <h1>About <a href="index.php">Jossy.com</a></h1>
              Jossy.com is an upcoming application that provide a platform for recruiters to post job offers, filter and choose the profiles that match theirs expectations. The applications allows job seekers to showcase their profile and find a job. It is the best application that link recruiters and job seekers.
              </div>
              </div>
              <hr>
              <div class="row">
              <div class="col-sm-12">
                     <a class="btn btn-social-icon btn-google-plus" href="http://www.google.com/+"><i class="fa fa-google-plus"></i></a>
                     <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/jossy"><i class="fa fa-facebook"></i></a>
                     <a class="btn btn-social-icon btn-youtube" href="http://www.youtube.com/jossy"><i class="fa fa-youtube"></i></a>
                     <a class="btn btn-social-icon btn-twitter" href="http://www.twitter.com/jossy"><i class="fa fa-twitter"></i></a>
              </div>
              </div>
              </div>
              <div class="col-sm-2">
                     <h3>Company</h3>
                     <a href="index.php"><img src="images/logo2.png" class="img img-circle" style="height:70px;width:70px;"></a><br/>
                     <h4><a href="">Jossy.com</a></h4>
                     <h5><a href="">About Us</a></h5>
                     <h5><a href="">Contact Us</a></h5>
              </div>
              <div class="col-sm-2">
              <h3>Links</h3><br>
              <h5><a href="index.php">home</a></h5>
              <h5><a href="add_job.php">Add Job</a></h5>
              <h5><a href="browse_job.php">Browse Jobs</a></h5>
              <h5><a href="logout.php">Log out</a></h5>
              </div>
              </div>

              <hr>
              <div class="row">
                            <div class="col-sm-12">
                            &copy; 2017,Jossy.com, Inc. All Rights Reserved. Terms of Use - Privacy Statement
                            </div>
              </div>
       </div>

</div>

</div>
       </body>
       </html>