<?php

$server = "mysql.main-hosting.com";
$username = "u102252830_root";
$password = "123456";
$database = "u102252830_sms";

$con = mysqli_connect($server, $username, $password);

if (!$con) {
    die("Could not connect: " . mysqli_connect_error());
}

mysqli_select_db($con, $database);

$staffid=$_POST["staffid"];
$pwd1=md5($_POST["pwd1"]);
$pwd2=md5($_POST["pwd2"]);
$name=$_POST["name"];
$ic=$_POST["ic"];
$email=$_POST["email"];
$address=$_POST["address"];
$position=$_POST["position"];
$state=$_POST["state"];


$sql = "INSERT INTO tbl_user(staffid, pwd1, name, ic, position, address, state, email, peranan) ";
$sql .= "VALUES ('$staffid', '$pwd1', '$name', '$ic', '$position', '$address', '$state', '$email', 'USER')";

if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
} else {
    echo "Comment added";
}

mysqli_close($con);

?>
