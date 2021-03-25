<?php

$message=$_POST['message'];
$email=$_POST['email'];

if ($email != "") {
    readfile("whistleblower-error.html");
} else {
    $to="whistleblower@colts.org, jeff@colts.org, jafjohns@indiana.edu, wlhowes@mchsi.com, bsmith@yousq.net, mpkelley@gmail.com, eelmshaeuser@gmail.com, cathiroberts.omaha@gmail.com, coltswhistleblower@gmail.com, aidan@colts.org";

    $subject="Whistleblower Policy Submission";
    $body="MESSAGE - $message\n";

    mail ( $to, $subject, $body );

    readfile("whistleblower-submission.html");
}
?>