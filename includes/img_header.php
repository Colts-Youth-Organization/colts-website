<!doctype html>

<head>

<script type="text/javascript" language="JavaScript">

NumberOfImagesToRotate = 200;


FirstPart = '<img src="img/header/img';
LastPart = '.jpg" height="75	" width="150">';

function printImage() {
var r = Math.ceil(Math.random() * NumberOfImagesToRotate);
document.write(FirstPart + r + LastPart);
}
//-->
</script>

</head>


