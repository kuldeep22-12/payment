<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pay</title>
</head>
<body>
<?php
session_start();
$name="kuldeep pathak";
$email="kp3480814@gmail.com";
$phone="8382896722";


$_SESSION['sname']=$name;
$_SESSION['semail']=$email;
$_SESSION['sphone']=$phone;
?>

	<div class=".container">
		<div class="row">
			<div class="col-sm-4">
				<img src="pr.jpg">
				<br>
				
				<a href="pay.php?amt=250;" style="text-align: center;font-size: 20px; padding:12px; background-color: green; color: white;text-decoration: none; " margin-left:55px;>Pay</a>
			</div>
		</div>
	</div>

</body>
</html>