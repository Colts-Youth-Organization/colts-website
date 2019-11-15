<!DOCTYPE html>
<html lang="en">

<script type="text/javascript" language="JavaScript">

NumberOfImagesToRotate = 318;


FirstPart = '<img src="img/header/img';
LastPart = '.jpg" height="75	" width="150">';

function printImage() {
var r = Math.ceil(Math.random() * NumberOfImagesToRotate);
document.write(FirstPart + r + LastPart);
}
//-->
</script>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<title>Colts Youth Organization - Whistleblower Policy</title>

	<link rel="shortcut icon" href="img/favicon.png">

	<meta name="description" content="">

	<!-- CSS -->
	<link href="css/preload.css" rel="stylesheet" media="screen">
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
	<link href="css/icon_colts.css" rel="stylesheet" media="screen">
	<link href="css/font-bank-gothic.css" rel="stylesheet" media="screen">
	<link href="css/animate.min.css" rel="stylesheet" media="screen">
	<link href="css/slidebars.css" rel="stylesheet" media="screen">
	<link href="css/lightbox.css" rel="stylesheet" media="screen">
	<link href="css/jquery.bxslider.css" rel="stylesheet">
	<link href="css/syntaxhighlighter/shCore.css" rel="stylesheet" media="screen">

	<link href="css/style-red.css" rel="stylesheet" media="screen" title="default">
	<link href="css/width-full.css" rel="stylesheet" media="screen" title="default">

	<link href="css/buttons.css" rel="stylesheet" media="screen">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->
    
	<script src="https://www.google.com/recaptcha/api.js"></script>
    
</head>

<!--#include file="includes/header.shtml" -->
<div id="include-header"></div>

<!--#include file="includes/menu.html" -->
<div id="include-menu"></div>

<header class="main-header">
  <div class="container">
    <h1 class="page-title pull-left">Whistleblower Process</h1>
    <span class="pull-right hidden-sm hidden-xs">
    	<script type="text/javascript" language="JavaScript"><!--
printImage();
//--></script>
		<script type="text/javascript" language="JavaScript"><!--
printImage();
//--></script>
		<script type="text/javascript" language="JavaScript"><!--
printImage();
//--></script>
    </span>
  </div>
</header>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="title-logo">No Retaliation - Whistleblower Process</div>
			<hr>
		</div>
        
        <p>The Colts Youth Organization requires directors, employees, volunteers, and members to observe high standards of business and personal ethics in conduct of their duties and responsibilities. As representatives of the Colts, we must practice honesty and integrity in fulfilling our responsibilities and comply with all applicable laws and regulations.</p>
        <p>The Colts Youth Organization firmly believes in, and is committed to, creating and maintaining, an open and transparent environment where any person involved with the organization feels comfortable and able to raise concerns, complaints, and issues with the Colts. However, we understand it is also essential we provide an avenue for confidential and anonymous submission of concerns, complaints, and issues to ensure the Colts has the full opportunity to investigate and address any potential violations of policy, law, or ordinance in the conduct of activities associated with the Colts.</p>
        <p>To view the full Whistleblower Policy, you can <a href="documents/whistleblower.pdf" target="_blank">click here.</a>
        
       	<h3 class="section-title">Submit Your Concern Anonymously</h3>
        <p>All submissions are anonymous and confidential. You <strong>do not</strong> need to include your name and/or contact information. However, if you would like a direct response, please do include your contact information or email <a href="mailto:whistleblower@colts.org">whistleblower@colts.org</a> directly.</p>
        
        <!-- WHISTLEBLOWER FORM -->
        <form class="form-horizontal" role="form" method="post" action="whistleblowerscript.php" style="margin-center">
        
        
        <!-- MESSAGE -->
            <div class="form-group">
                <label for="Inputmessage" class="col-sm-5 control-label">Message</label>
                <div class="col-sm-1">
                    <textarea name="message" rows="10" cols="50" required></textarea>
                </div>
            </div>
            
            <br>
            <center>
            <button value="submit" type="submit" class="btn btn-ar btn-primary">Submit</button>
            <div class="clearfix"></div>
            <center>
				</form>
			</div>
          </div>
		<!-- /WHISTLEBLOWER FORM -->
        </div>
	</div> <!-- row -->
</div> <!-- container -->

<!--#include file="includes/footer.html" -->
<div id="include-footer"></div>

<!-- boxed -->
<!-- sb-site -->

<!--<div id="back-top">
	<a href="#header"><i class="fa fa-chevron-up"></i></a>
</div> -->

<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-switch.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/slidebars.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/holder.js"></script>
<script src="js/buttons.js"></script>
<script src="js/styleswitcher.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/circles.min.js"></script>

<!-- Syntaxhighlighter -->
<script src="js/syntaxhighlighter/shCore.js"></script>
<script src="js/syntaxhighlighter/shBrushXml.js"></script>
<script src="js/syntaxhighlighter/shBrushJScript.js"></script>

<script src="js/app.js"></script>

<script> 
	$(function(){
		$("#include-header").load("includes/header.html"); 
		$("#include-menu").load("includes/menu.html");
		$("#include-footer").load("includes/footer.html");
	});
</script> 

</html>
