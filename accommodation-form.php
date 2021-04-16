<?php

$name=$_POST['name'];
$email=$_POST['email'];
$corps=$_POST['corps'];
$message=$_POST['message'];

$to="jeff@colts.org, vicki@colts.org, rich@colts.org";

$subject="Accommodation Request Submission";
$body="Name: $name\nEmail: $email\nCorps, group or event: $corps\nMessage: $message\n";

mail ( $to, $subject, $body );

readfile("accommodation-form-submission.html");
?>