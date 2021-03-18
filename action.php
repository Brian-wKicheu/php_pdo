<?php
include_once 'dbh.php';

$name=$_POST['fname'];
$email=$_POST['femail'];
$mobile=$_POST['fmobile'];

$sql="INSERT INTO ps1(name, email, mobile) VALUES(?, ?, ?);";
$stmt=$dbconn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $mobile);
$stmt->execute();
header("location: ../index.php?record inserted");
?>
