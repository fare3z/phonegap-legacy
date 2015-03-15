

<?php

$server = "mysql.main-hosting.com";
$username = "u102252830_root";
$password = "123456";
$database = "u102252830_sms";

$con = mysql_connect($server, $username, $password) or die ("Could not connect: " . mysql_error());

mysql_select_db($database, $con);

$staffid=$_POST["staffid"];
$pwd1=md5($_POST["pwd1"]);
$pwd2=md5($_POST["pwd2"]);
$name=$_POST["name"];
$ic=$_POST["ic"];
$email=$_POST["email"];
$address=$_POST["address"];
$position=$_POST["position"];
$state=$_POST["state"];


$sql = "INSERT INTO tbl_user(staffid,pwd1,name,ic,position,address,state,email,peranan) ";

$sql .= "VALUES ('$staffid','$pwd1','$name','$ic','$position','$address','$state','$email','USER')";


if (!mysql_query($sql, $con)) {
	die('Error: ' . mysql_error());
} else {
	echo "Comment added";
}

mysql_close($con);

?>

<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>jQuery Mobile Web App</title>
<link href="jquery.mobile.theme-1.0.min.css" rel="stylesheet" type="text/css"/>
<link href="jquery.mobile.structure-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery.mobile-1.0.min.js" type="text/javascript"></script>
<script src="submit.js" type="text/javascript"></script>
</head> 
<body> 
<div data-role="content">
</div>
</body>
</html>
