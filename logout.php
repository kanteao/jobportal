<?php   
session_start();
session_destroy();
header("location:/jobportal/index.php"); 
exit();
?>