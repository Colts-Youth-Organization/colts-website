<?php

$message=$_POST['message'];

$to="whistleblower@colts.org, jeff@colts.org, petermh@msn.com, jafjohns@indiana.edu, wlhowes@mchsi.com, bsmith@yousq.net, colts.cooks@comcast.net, cathiroberts.omaha@gmail.com, coltswhistleblower@gmail.com";
$subject="Whistleblower Policy Submission";
$body="MESSAGE - $message\n";

mail ( $to, $subject, $body );

readfile("whistleblower_submission.html");

?>
