<?php
    require ("PHPMailer-master/PHPMailer-master/PHPMailerAutoload.php");
      $name=$row['name'];
    $password=$row['password'];
    $text="Hi ".$name."\n"."Your password is ".$password."\n";
$mail=new PHPMailer;
$mail->IsSmtp();
$mail->SMTPDebug=1;
$mail->SMTPAuth="true";
$mail->SMTPSecure='ssl';
$mail->HOST="smtp.gmail.com";
$mail->PORT="465";
$mail->Username="kanteao@gmail";
$mail->Password="talal1235";
$mail->setFrom("kanteao@gmail.com","KANTE Alpha Oumar");
$mail->addAddress($email6,$name);
$mail->Subject="Forgot Password?";
$mail->Body=$text;
    if(!$mail->send()) 
    {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
    } 
    else 
    {
  echo 'Message has been sent.';
    }
    //mail($email6,"Forgot password",$text,"From: kanteao@gmail.com");
   
  }
?>