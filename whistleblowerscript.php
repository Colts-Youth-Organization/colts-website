<?php

if(isset($_POST['g-recaptcha-response'])) {
   // RECAPTCHA SETTINGS
   $captcha = $_POST['g-recaptcha-response'];
   $ip = $_SERVER['REMOTE_ADDR'];
   $key = '6LdPsW8UAAAAAAZ_MTtJlqxESaBwaQb5j7YVpRa_';
   $url = 'https://www.google.com/recaptcha/api/siteverify';
 
   // RECAPTCH RESPONSE
   $recaptcha_response = file_get_contents($url.'?secret='.$key.'&response='.$captcha.'&remoteip='.$ip);
   $data = json_decode($recaptcha_response);
 
   if(isset($data->success) &&  $data->success === true) {
       // code goes here
   }
   else {
      die('Please click "back" and be sure to check the reCAPTCHA box before submitting. Thank you!');
   }
}

$message=$_POST['message'];

$to="whistleblower@colts.org, jeff@colts.org, petermh@msn.com, jafjohns@indiana.edu, wlhowes@mchsi.com, bsmith@yousq.net, colts.cooks@comcast.net, cathiroberts.omaha@gmail.com, coltswhistleblower@gmail.com";
$subject="Whistleblower Policy Submission";
$body="MESSAGE - $message\n";

mail ( $to, $subject, $body );

readfile("whistleblower_submission.html");

?>