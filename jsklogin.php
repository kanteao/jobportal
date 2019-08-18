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
?>
<!DOCTYPE html>
<html>
<head>
  <title>login</title>
</head>
<body>
<?php


$email=$_GET['mail1'];
  $password=$_GET['psw1'];
  $query="SELECT * FROM user";
  $result=mysqli_query($con,$query);
  if($result)
  {
  while($user=mysqli_fetch_assoc($result))
  {
    
    if($email==$user['email'] and $password==$user['password'])
    {
    $_SESSION['userid']=$user['id'];
    $_SESSION['photo']=$user['photo'];
    $_SESSION['name']=$user['name'];
    ?>

    <script>
    alert("User log in successful");
    window.location="index.php";
    </script>
    <?php
    echo $_SESSION['userid'];
    echo $_SESSION['name'];
    echo "success";
    }
    else
    {
    ?>
    <script>
  
    alert("log in failed");
    //window.location="index.php";
    </script>
    <?php
    echo $email;
    echo $password;
    echo"<br>";
    echo $user['email']; 
    echo $user['password'];
     echo"<br>";
   
    }
  }
}

?>

</body>
</html>
  