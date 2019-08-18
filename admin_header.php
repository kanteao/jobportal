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
            Admin Zone</a>
            </li>
           <li><a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-globe"></span><br>Recruiters<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="recruiter2.php"><span class="glyphicon glyphicon-hand-right"></span> Recruiter Profil</a></li>
                <li><a href="company2.php"><span class="glyphicon glyphicon-hand-right"></span> Company</a></li>
                <li><a href="rec_job.php"><span class="glyphicon glyphicon-hand-right"></span> Jobs posted</a></li>
              </ul>

            </li>
             <li><a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-globe"></span><br>Job seekers<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="cand_prof.php"><span class="glyphicon glyphicon-hand-right"></span> Candidates Profils</a></li>
                <li><a href="cand_app.php"><span class="glyphicon glyphicon-hand-right"></span> Job applications</a></li>
              </ul>

            </li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-arrow-up"></span><br>
            log out</a>
            </li>
          </ul>
       </div>

 </nav>