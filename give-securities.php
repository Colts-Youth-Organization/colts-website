<?php

$first=$_POST['first_name'];
$last=$_POST['last_name'];
$email=$_POST['email'];
$phone=$_POST['mobile'];
if(isset($_POST['checkMoreInfo']))
{
    $moreinfo="YES — I would like more information about transferring securities to the Colts.\n";
}
else
{
    $moreinfo="";
}

if(isset($_POST['checkRMD']))
{
    $rmd="YES — I am sending (have sent) a Required Minimum Distribution (RMD) from my IRA. Please let me know when the funds arrive.\n";
}
else
{
    $rmd="";
}

$foundation=$_POST['foundation-name'];

if(isset($_POST['checkDAF']))
{
    $daf="YES — A distribution from my donor-advised fund is coming from: $foundation\n";
}
else
{
    $daf="";
}

$comments=$_POST['message'];

$message="Name: $first $last\nEmail: $email\nPhone: $phone\n$moreinfo $rmd $daf\nOther comments: $comments";
$to="aidan@colts.org, jeff@colts.org";

$subject="Securities / Foundations Form Submitted";
$body="$message\n";

mail ( $to, $subject, $body );

readfile("give-form-submission.html");
?>