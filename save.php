<?php
session_start();
include './db.php';
$username = $_POST["username"];
$password = $_POST['password'];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];


$passwordd=base64_encode( $_POST['password'] );

echo 'username:  '.$username.'    ////   ';
echo 'password  '.$password.'   ////    ';
echo 'encode  '.$passwordd.'  /////     ';
echo 'firstname  '.$firstname.'  /////     ';
echo 'lastname  '.$lastname.'  /////     ';
$sentence="INSERT INTO tbl_user (permission,username,password,firstname,lastname)
VALUES(1,'$username','$passwordd','$firstname','$lastname')";
$mysqli->query($sentence);

header('location: ./session.php');

?>
