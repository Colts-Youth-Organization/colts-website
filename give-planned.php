<?php

$first=$_POST['first_name'];
$last=$_POST['last_name'];
$email=$_POST['email'];
$phone=$_POST['mobile'];
if(isset($_POST['checkAlreadyIncluded']))
{
    $alreadyincluded="YES — I have already included the Colts in my estate plans.\n";
}
else
{
    $alreadyincluded="";
}

if(isset($_POST['checkInterested']))
{
    $interested="YES — I'm interested to learn more about how to leave a legacy gift.\n";
}
else
{
    $interested="";
}

$comments=$_POST['message'];

$message="Name: $first $last\nEmail: $email\nPhone: $phone\n$alreadyincluded $interested \nOther comments: $comments";
$to="aidan@colts.org, jeff@colts.org";

$subject="Planned Giving Form Submitted";
$body="$message\n";

mail ( $to, $subject, $body );

readfile("give-form-submission.html");
?>