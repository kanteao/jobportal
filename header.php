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
.carousel .item {
    -webkit-transition: opacity  5s ease-in;
    -moz-transition: opacity  5s ease-in;
    -ms-transition: opacity  5s ease-in;
    -o-transition: opacity  5s ease-in;
    transition: opacity  5s ease-in;
}
.rec:hover,.ph:hover{animation:rotation 1s linear both;}
@keyframes rotation{
  from{transfom:rotate(0turn);}
  to{transfom:rotate(1turn);}
}
.apply label{color:cyan;font-size:16px; }
	.city{height:200px;width:370px;}
	.comp{height:250px;width:250px;}
	.jumbotron{height:60px;}
	.menu{position:absolute;top:0px;}
	.footer a{color:inherit;}
	.carousel-search .in{background: rgba(255, 255, 255,0.6);color:white;font-weight: bold;}
	.footer hr {border:double 3px lightgray;}
@media (max-width: @screen-xs) {
    body{font-size: 10px;}
}
	</style>
</head>
<body>
<div class="jumbotron">
<div class="row">
<div class="col-sm-10 col-sm-offset-1">
 <nav class="navbar navbar-default">
       	 	<div class="navbar navbar-header">
       	 		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
       	 			<span class="sr-only">Toggle navigation</span>
       	 			<span class="icon-bar"></span>
       	 			<span class="icon-bar"></span>
       	 			<span class="icon-bar"></span>
       	 		</button>
       	 		<a class="navbar-brand" href="index.php" style="padding-top:12px;"><img src="images/company.png" style="height:50px;width:200px;"></a>
       	 	</div>
       	 	<div class="collapse navbar-collapse" id="menu" style="padding-top:10px;">
       	 	<ul class="nav nav-pills nav-justified">
       	 		<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span><br>Home</a></li>
       	 		<li><a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-globe"></span><br>Jobs<span class="caret"></span></a>
       	 			<ul class="dropdown-menu">
       	 				<li><a href="alljob.php"><span class="glyphicon glyphicon-hand-right"></span> All Jobs</a></li>
       	 				<li><a href="job_by_location.php"><span class="glyphicon glyphicon-hand-right"></span> Jobs by Location</a></li>
       	 				<li><a href="job_by_company.php"><span class="glyphicon glyphicon-hand-right"></span> Jobs by company</a></li>
       	 				<li><a href="job_by_designation.php"><span class="glyphicon glyphicon-hand-right"></span> Jobs by designation</a></li>
       	 			</ul>

       	 		</li>
       	 		<li><a href=""  class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><br>Recruiters<span class="caret"> </span></a>
       	 				<ul class="dropdown-menu">
       	 				<li><a href="recruiter1.php"><span class="glyphicon glyphicon-search"></span> Browse Recruiters</a></li>
       	 			</ul>
       	 		</li>
       	 		<li><a href=""  class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-briefcase"></span><br>Company<span class="caret"></span></a>
       	 				<ul class="dropdown-menu">
       	 				<li><a href="company.php"><span class="glyphicon glyphicon-search"></span> Browse Company</a></li>
       	 				<li><a href="interview.php"><span class="glyphicon glyphicon-hourglass"></span> Interview Question</a></li>
       	 			</ul>
       	 		</li>
       	 		<li><a href=""  class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-th-list"></span><br>Services<span class="caret"></span></a>
       	 				<ul class="dropdown-menu">
       	 				<li><a href=""><span class="glyphicon glyphicon-file"></span> Resume Writting</a></li>
       	 				<li><a href=""><span class="glyphicon glyphicon-education"></span> Certifications</a></li>
       	 				
       	 			</ul>
       	 		</li>
       	 		<?php

       	 		if(isset($_SESSION['userid']))
       	 		{
       	 		?>
       	 		<li><a href=""  class="dropdown-toggle" data-toggle="dropdown"><?php echo '<img class="img-thumbnail" style="height:30px;"src="data:image/jpeg;base64,'.base64_encode($_SESSION['photo']).'"  >'; ?><br><?php echo $_SESSION['name'];?><span class="caret"></span></a>
       	 				<ul class="dropdown-menu">
       	 				<li><a href="profile.php?userid=<?php echo $_SESSION['userid'];?>"><span class="glyphicon glyphicon-file"></span> My Profile</a></li>
       	 				<li><a href="edit_rec_profile.php"><span class="glyphicon glyphicon-education"></span> Edit Profile</a></li>
       	 				<li><a href=""  data-toggle="modal" data-target="#change_psw"><span class="glyphicon glyphicon-education"></span> Change Password</a></li>
       	 				<li><a href="logout.php"><span class="glyphicon glyphicon-education"></span> logout</a></li>
       	 			</ul>
       	 		</li>
       	 		<?php
       	 		}
       	 		else
       	 		{
       	 		?>
       	 		<li><a href="" data-toggle="modal" data-target="#jseeklogin"><span class="glyphicon glyphicon-arrow-down"></span><br>Login</a></li>
       	 		<?php
       	 		}
       	 		?>
				<li><a href=""  class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-eye-open"></span><br>Employers Zone<span class="caret"></span></a>
					<ul class="dropdown-menu">
       	 				<li><a href="" data-toggle="modal" data-target="#recsignup"><span class="glyphicon glyphicon-plus-sign"></span> Register</a></li>
       	 				<li><a href="" data-toggle="modal" data-target="#reclogin"><span class="glyphicon glyphicon-arrow-down"></span> Login</a></li>
       	 				
       	 			</ul>
				</li>
        <li><a href="admin_login.php"><span class="glyphicon glyphicon-eye-open"></span><br>Admin Zone<span class="caret"></span></a></li>
          
       		</ul>
       </div>

 </nav>
 </div>

<!--Login for the job seekers-->	
</div>
</div>
<!--Login for the job seekers-->  
<div id="jseeklogin" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background:pink;">User Login
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
        <form action="index.php" method="post">
          <div class="input-group"><span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input type="mail" class="form-control" placeholder="Enter your mail" name="mail1"></div>
          <hr>
           <div class="input-group"><span class="input-group-addon"><i class="fa fa-key"></i></span>
           <input type="password" class="form-control" placeholder="password" name="psw1">
           </div>
           <hr>
           <input type="submit" class="btn btn-lg btn-info move" name="jsklogin" value="login">
          <a href="forgetpassw.php"><input type="button" class="btn btn-lg btn-info move" value="Forget password"></a>
        </form>
      </div>
        
    </div>
  </div>
</div>
<?php
if(isset($_POST['jsklogin']))
{
  $email7=$_POST['mail1'];
  $password7=$_POST['psw1'];
  $query7="SELECT * FROM user where email='$email7' and password='$password7'";
  echo $query7;
  $result7=mysqli_query($con,$query7);
  if($result7)
  {
  if($user=mysqli_fetch_assoc($result7))
  {
      if (session_id()=='')
      {
      session_start();
      }
    $_SESSION['userid']=$user['id'];
    $_SESSION['photo']=$user['photo'];
    $_SESSION['name']=$user['name'];
    ?>
    <script>
    alert("User log in successful");
    window.location="index.php";
    </script>
    <?php
    }
  }
  else
  {
 ?>
    <script>
    alert("log in failed");
    window.location="index.php";
    </script>
    <?php

  }

}
?>



<!--Change password-->
<div id="change_psw" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background:pink;">Change User Password
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
        <form action="index.php" method="post">
          <div class="input-group"><span class="input-group-addon"><i class="fa fa-user">Password</i></span>
          <input type="password" class="form-control" placeholder="Enter your Password" name="pass1"></div>
          <hr>
           <div class="input-group"><span class="input-group-addon"><i class="fa fa-key">Confirm Password</i></span>
           <input type="password" class="form-control" placeholder="Confirm Password" name="pass2">
           </div>
           <hr>
           <input type="submit" class="btn btn-lg btn-info move" name="change_pswd" value="login">
        </form>
      </div>
        
    </div>
  </div>
</div>
<?php
if(isset($_POST['change_pswd']))
{
  $pass1=$_POST['pass1'];
  $pass2=$_POST['pass2'];
  if($pass1==$pass2)
  {
  $query5="UPDATE user SET password='{$pass1}'";
  $result5=mysqli_query($con,$query5);
 
    if($result5)
    {

    ?>
    <script>
    alert("Password Changed successfully");
    window.location='logout.php';
    </script>
    <?php
    }
    else
    {
      ?>
    <script>
    alert("password change failed");
    window.location='index.php';
    </script>
    <?php
    }
  }
  else
  {
    ?>
    <script>
    alert("passwords not matching");
    </script>
    <?php
  }


}
?>



<!--start of Login and sign up for the recruiters-->

<div id="reclogin" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background:pink;">Recruiter Login
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
        <form action="index.php" method="post">
          <div class="input-group"><span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input type="mail" class="form-control" placeholder="Enter your mail" name="email2"></div>
          <hr>
           <div class="input-group"><span class="input-group-addon"><i class="fa fa-key"></i></span>
           <input type="password" class="form-control" placeholder="password" name="password2">
           </div>
           <hr>
           <input type="submit" class="btn btn-lg btn-info move" name="reclogin" value="login">
          <a href="forgetpassw.php"><input type="button" class="btn btn-lg btn-info move" value="Forget password"></a>
        </form>
      </div>
        
    </div>
  </div>
</div>
<?php
if(isset($_POST['reclogin']))
{
  $email2=$_POST['email2'];
  $password2=$_POST['password2'];
  $query2="SELECT * FROM recruiter where email_id='$email2' and password='$password2'";
  $result2=mysqli_query($con,$query2);
  if($result2)
  {
  if($row=mysqli_fetch_assoc($result2))
  {
      if (session_id()=='')
      {
      session_start();
  	  }
    $_SESSION['rec_id']=$row['id'];
    $_SESSION['comp_name']=$row['company_name'];
    $_SESSION['rec_name']=$row['rec_name'];
    ?>
    <script>
    alert("Recruiter log in successful");
    window.location="recruiter.php";
    </script>
    <?php
    }
  }
  else
  {
 ?>
    <script>
    alert("log in failed");
    window.location="ndex.php";
    </script>
    <?php

  }

}
?>
<!--<button type="button" class="btn btn-sm btn-info" style="color:white;" data-toggle="modal" data-target="#signup">Sign up</button>-->

<div id="recsignup" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background:pink;">User Sign Up
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>

      <div class="modal-body">
        <form action="index.php" enctype="multipart/form-data" method="post">

        <div class="row">
        <div class="col-sm-6">
<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
<input type="text" class="form-control" placeholder="Recruiter Name" name="recname" required="required" >
</div><hr>
<label>Profile Picture</label><div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
<input type="file" class="form-control" placeholder="Recruiter photo" name="photo" required="required" >
</div><hr>
<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
<input type="text" class="form-control" placeholder="Email ID" name="email" required="required" >
</div>
<hr>
<div class="input-group"><span class="input-group-addon"><i class="fa fa-key"></i></span>
<input type="password" class="form-control" placeholder="Password" name="password" required="required">
</div>
<hr>
 <div class="input-group"><span class="input-group-addon"><i class="fa fa-building-o"></i></span>
 <select name="comp_type" class="form-control" required="required">
            <option value="Company">Company</option>
            <option value="consultant">Consultant</option>
 </select>
 </div>
 <hr>
 <div class="input-group"><span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
 <input type="text" class="form-control" placeholder="Address" name="address" required="required">
 </div>
 <hr>
 <div class="input-group"><span class="input-group-addon"><i class="fa fa-thumb-tack"></i></span>
 <input type="text" class="form-control" placeholder="City" name="city" required="required">
 </div>
 <hr>
        </div>

        <div class="col-sm-6">
 <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
<input type="text" class="form-control" placeholder="Recruiter post" name="recposition" required="required" >
</div><hr>
<label>Company Logo</label><div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
<input type="file" class="form-control" placeholder="Compamy logo" name="comp_logo" required="required" >
</div><hr>
  <div class="input-group"><span class="input-group-addon"><i class="fa fa-building"></i></span>
  <input type="text" class="form-control" placeholder="Company Name" name="comp_name" required="required">
  </div>
  <hr>
  <div class="input-group"><span class="input-group-addon"><i class="fa fa-key"></i></span>
  <input type="password" class="form-control" placeholder="Confirm Password" name="confpassword" required="required">
  </div><hr>
   <div class="input-group"><span class="input-group-addon"><i class="fa fa-industry"></i></span>
   <select name="industry_type" class="form-control" required="required">
            <option value="information technolgy">information technolgy</option>
            <option value="business">business</option>
            <option value="voice process">voice process</option>
   </select></div>
  <hr> <div class="input-group"><span class="input-group-addon"><i class="fa fa-phone"></i></span>
  <input type="number" class="form-control" placeholder="Contact Number" name="contact_no" required="required"></div><hr>

  <div class="input-group"><span class="input-group-addon"><i class="fa fa-globe"></i></span><select class="form-control" name="country" required="required">
	<option value="AFG">Afghanistan</option>
	<option value="ALA">Åland Islands</option>
	<option value="ALB">Albania</option>
	<option value="DZA">Algeria</option>
	<option value="ASM">American Samoa</option>
	<option value="AND">Andorra</option>
	<option value="AGO">Angola</option>
	<option value="AIA">Anguilla</option>
	<option value="ATA">Antarctica</option>
	<option value="ATG">Antigua and Barbuda</option>
	<option value="ARG">Argentina</option>
	<option value="ARM">Armenia</option>
	<option value="ABW">Aruba</option>
	<option value="AUS">Australia</option>
	<option value="AUT">Austria</option>
	<option value="AZE">Azerbaijan</option>
	<option value="BHS">Bahamas</option>
	<option value="BHR">Bahrain</option>
	<option value="BGD">Bangladesh</option>
	<option value="BRB">Barbados</option>
	<option value="BLR">Belarus</option>
	<option value="BEL">Belgium</option>
	<option value="BLZ">Belize</option>
	<option value="BEN">Benin</option>
	<option value="BMU">Bermuda</option>
	<option value="BTN">Bhutan</option>
	<option value="BOL">Bolivia, Plurinational State of</option>
	<option value="BES">Bonaire, Sint Eustatius and Saba</option>
	<option value="BIH">Bosnia and Herzegovina</option>
	<option value="BWA">Botswana</option>
	<option value="BVT">Bouvet Island</option>
	<option value="BRA">Brazil</option>
	<option value="IOT">British Indian Ocean Territory</option>
	<option value="BRN">Brunei Darussalam</option>
	<option value="BGR">Bulgaria</option>
	<option value="BFA">Burkina Faso</option>
	<option value="BDI">Burundi</option>
	<option value="KHM">Cambodia</option>
	<option value="CMR">Cameroon</option>
	<option value="CAN">Canada</option>
	<option value="CPV">Cape Verde</option>
	<option value="CYM">Cayman Islands</option>
	<option value="CAF">Central African Republic</option>
	<option value="TCD">Chad</option>
	<option value="CHL">Chile</option>
	<option value="CHN">China</option>
	<option value="CXR">Christmas Island</option>
	<option value="CCK">Cocos (Keeling) Islands</option>
	<option value="COL">Colombia</option>
	<option value="COM">Comoros</option>
	<option value="COG">Congo</option>
	<option value="COD">Congo, the Democratic Republic of the</option>
	<option value="COK">Cook Islands</option>
	<option value="CRI">Costa Rica</option>
	<option value="CIV">Côte d'Ivoire</option>
	<option value="HRV">Croatia</option>
	<option value="CUB">Cuba</option>
	<option value="CUW">Curaçao</option>
	<option value="CYP">Cyprus</option>
	<option value="CZE">Czech Republic</option>
	<option value="DNK">Denmark</option>
	<option value="DJI">Djibouti</option>
	<option value="DMA">Dominica</option>
	<option value="DOM">Dominican Republic</option>
	<option value="ECU">Ecuador</option>
	<option value="EGY">Egypt</option>
	<option value="SLV">El Salvador</option>
	<option value="GNQ">Equatorial Guinea</option>
	<option value="ERI">Eritrea</option>
	<option value="EST">Estonia</option>
	<option value="ETH">Ethiopia</option>
	<option value="FLK">Falkland Islands (Malvinas)</option>
	<option value="FRO">Faroe Islands</option>
	<option value="FJI">Fiji</option>
	<option value="FIN">Finland</option>
	<option value="FRA">France</option>
	<option value="GUF">French Guiana</option>
	<option value="PYF">French Polynesia</option>
	<option value="ATF">French Southern Territories</option>
	<option value="GAB">Gabon</option>
	<option value="GMB">Gambia</option>
	<option value="GEO">Georgia</option>
	<option value="DEU">Germany</option>
	<option value="GHA">Ghana</option>
	<option value="GIB">Gibraltar</option>
	<option value="GRC">Greece</option>
	<option value="GRL">Greenland</option>
	<option value="GRD">Grenada</option>
	<option value="GLP">Guadeloupe</option>
	<option value="GUM">Guam</option>
	<option value="GTM">Guatemala</option>
	<option value="GGY">Guernsey</option>
	<option value="GIN">Guinea</option>
	<option value="GNB">Guinea-Bissau</option>
	<option value="GUY">Guyana</option>
	<option value="HTI">Haiti</option>
	<option value="HMD">Heard Island and McDonald Islands</option>
	<option value="VAT">Holy See (Vatican City State)</option>
	<option value="HND">Honduras</option>
	<option value="HKG">Hong Kong</option>
	<option value="HUN">Hungary</option>
	<option value="ISL">Iceland</option>
	<option value="IND" selected="selected">India</option>
	<option value="IDN">Indonesia</option>
	<option value="IRN">Iran, Islamic Republic of</option>
	<option value="IRQ">Iraq</option>
	<option value="IRL">Ireland</option>
	<option value="IMN">Isle of Man</option>
	<option value="ISR">Israel</option>
	<option value="ITA">Italy</option>
	<option value="JAM">Jamaica</option>
	<option value="JPN">Japan</option>
	<option value="JEY">Jersey</option>
	<option value="JOR">Jordan</option>
	<option value="KAZ">Kazakhstan</option>
	<option value="KEN">Kenya</option>
	<option value="KIR">Kiribati</option>
	<option value="PRK">Korea, Democratic People's Republic of</option>
	<option value="KOR">Korea, Republic of</option>
	<option value="KWT">Kuwait</option>
	<option value="KGZ">Kyrgyzstan</option>
	<option value="LAO">Lao People's Democratic Republic</option>
	<option value="LVA">Latvia</option>
	<option value="LBN">Lebanon</option>
	<option value="LSO">Lesotho</option>
	<option value="LBR">Liberia</option>
	<option value="LBY">Libya</option>
	<option value="LIE">Liechtenstein</option>
	<option value="LTU">Lithuania</option>
	<option value="LUX">Luxembourg</option>
	<option value="MAC">Macao</option>
	<option value="MKD">Macedonia, the former Yugoslav Republic of</option>
	<option value="MDG">Madagascar</option>
	<option value="MWI">Malawi</option>
	<option value="MYS">Malaysia</option>
	<option value="MDV">Maldives</option>
	<option value="MLI">Mali</option>
	<option value="MLT">Malta</option>
	<option value="MHL">Marshall Islands</option>
	<option value="MTQ">Martinique</option>
	<option value="MRT">Mauritania</option>
	<option value="MUS">Mauritius</option>
	<option value="MYT">Mayotte</option>
	<option value="MEX">Mexico</option>
	<option value="FSM">Micronesia, Federated States of</option>
	<option value="MDA">Moldova, Republic of</option>
	<option value="MCO">Monaco</option>
	<option value="MNG">Mongolia</option>
	<option value="MNE">Montenegro</option>
	<option value="MSR">Montserrat</option>
	<option value="MAR">Morocco</option>
	<option value="MOZ">Mozambique</option>
	<option value="MMR">Myanmar</option>
	<option value="NAM">Namibia</option>
	<option value="NRU">Nauru</option>
	<option value="NPL">Nepal</option>
	<option value="NLD">Netherlands</option>
	<option value="NCL">New Caledonia</option>
	<option value="NZL">New Zealand</option>
	<option value="NIC">Nicaragua</option>
	<option value="NER">Niger</option>
	<option value="NGA">Nigeria</option>
	<option value="NIU">Niue</option>
	<option value="NFK">Norfolk Island</option>
	<option value="MNP">Northern Mariana Islands</option>
	<option value="NOR">Norway</option>
	<option value="OMN">Oman</option>
	<option value="PAK">Pakistan</option>
	<option value="PLW">Palau</option>
	<option value="PSE">Palestinian Territory, Occupied</option>
	<option value="PAN">Panama</option>
	<option value="PNG">Papua New Guinea</option>
	<option value="PRY">Paraguay</option>
	<option value="PER">Peru</option>
	<option value="PHL">Philippines</option>
	<option value="PCN">Pitcairn</option>
	<option value="POL">Poland</option>
	<option value="PRT">Portugal</option>
	<option value="PRI">Puerto Rico</option>
	<option value="QAT">Qatar</option>
	<option value="REU">Réunion</option>
	<option value="ROU">Romania</option>
	<option value="RUS">Russian Federation</option>
	<option value="RWA">Rwanda</option>
	<option value="BLM">Saint Barthélemy</option>
	<option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value="KNA">Saint Kitts and Nevis</option>
	<option value="LCA">Saint Lucia</option>
	<option value="MAF">Saint Martin (French part)</option>
	<option value="SPM">Saint Pierre and Miquelon</option>
	<option value="VCT">Saint Vincent and the Grenadines</option>
	<option value="WSM">Samoa</option>
	<option value="SMR">San Marino</option>
	<option value="STP">Sao Tome and Principe</option>
	<option value="SAU">Saudi Arabia</option>
	<option value="SEN">Senegal</option>
	<option value="SRB">Serbia</option>
	<option value="SYC">Seychelles</option>
	<option value="SLE">Sierra Leone</option>
	<option value="SGP">Singapore</option>
	<option value="SXM">Sint Maarten (Dutch part)</option>
	<option value="SVK">Slovakia</option>
	<option value="SVN">Slovenia</option>
	<option value="SLB">Solomon Islands</option>
	<option value="SOM">Somalia</option>
	<option value="ZAF">South Africa</option>
	<option value="SGS">South Georgia and the South Sandwich Islands</option>
	<option value="SSD">South Sudan</option>
	<option value="ESP">Spain</option>
	<option value="LKA">Sri Lanka</option>
	<option value="SDN">Sudan</option>
	<option value="SUR">Suriname</option>
	<option value="SJM">Svalbard and Jan Mayen</option>
	<option value="SWZ">Swaziland</option>
	<option value="SWE">Sweden</option>
	<option value="CHE">Switzerland</option>
	<option value="SYR">Syrian Arab Republic</option>
	<option value="TWN">Taiwan, Province of China</option>
	<option value="TJK">Tajikistan</option>
	<option value="TZA">Tanzania, United Republic of</option>
	<option value="THA">Thailand</option>
	<option value="TLS">Timor-Leste</option>
	<option value="TGO">Togo</option>
	<option value="TKL">Tokelau</option>
	<option value="TON">Tonga</option>
	<option value="TTO">Trinidad and Tobago</option>
	<option value="TUN">Tunisia</option>
	<option value="TUR">Turkey</option>
	<option value="TKM">Turkmenistan</option>
	<option value="TCA">Turks and Caicos Islands</option>
	<option value="TUV">Tuvalu</option>
	<option value="UGA">Uganda</option>
	<option value="UKR">Ukraine</option>
	<option value="ARE">United Arab Emirates</option>
	<option value="GBR">United Kingdom</option>
	<option value="USA">United States</option>
	<option value="UMI">United States Minor Outlying Islands</option>
	<option value="URY">Uruguay</option>
	<option value="UZB">Uzbekistan</option>
	<option value="VUT">Vanuatu</option>
	<option value="VEN">Venezuela, Bolivarian Republic of</option>
	<option value="VNM">Viet Nam</option>
	<option value="VGB">Virgin Islands, British</option>
	<option value="VIR">Virgin Islands, U.S.</option>
	<option value="WLF">Wallis and Futuna</option>
	<option value="ESH">Western Sahara</option>
	<option value="YEM">Yemen</option>
	<option value="ZMB">Zambia</option>
	<option value="ZWE">Zimbabwe</option>
</select></div>
        </div>
          
          <input type="submit" class="btn btn-lg btn-info form-control" value="Sign up" name="signup" required="required"><hr>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-lg btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<?php
if(isset($_POST['signup']))
{
	$recname=$_POST['recname'];
	$recposition=$_POST['recposition'];
	$photo=mysql_real_escape_string(file_get_contents($_FILES["photo"]["tmp_name"]));
	$comp_logo=mysql_real_escape_string(file_get_contents($_FILES["comp_logo"]["tmp_name"]));
$email=$_POST['email'];
$comp_name=$_POST['comp_name'];
$comp_type=$_POST['comp_type'];
$industry_type=$_POST['industry_type'];
$address=$_POST['address'];
$country=$_POST['country'];
$city=$_POST['city'];
$contact_no=$_POST['contact_no'];
$password=$_POST['password'];
$repassword=$_POST['confpassword'];
if($password==$repassword) 
{
 $query="INSERT INTO recruiter (rec_name,rec_position,photo,email_id,password,company_name,company_logo,company_type,industry_type,address,country,city,contact_no) VALUES ('{$recname}','{$recposition}','{$photo}','{$email}','{$password}','{$comp_name}','{$comp_logo}','{$comp_type}','{$industry_type}','{$address}','{$country}','{$city}',{$contact_no})";
$result=mysqli_query($con,$query);
if($result)
{
  ?>
<script>
alert("sign up successful");
</script>
<?php
}
else
{
?>
<script>
alert("sign up fail");
</script>
<?php
}
}
else
{
?>
<script>
alert("password not matching");
</script>
<?php
}
}
?>
<!--end of Login and sign up for the recruiters-->