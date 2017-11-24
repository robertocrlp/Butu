<?php
session_start();
include './db.php';
$username = $_POST["username"];
$password = $_POST['password'];

$result = $mysqli->query("SELECT * FROM tbl_user WHERE username='$username'");
$row = $result->fetch_assoc();

if ( $result->num_rows == 0 ){ // User doesn't exist
   $_SESSION['error'] = "El nombre de usuario no existe";
   header("location: ./error.php");
}
else{
   if($password==base64_decode($row['password'])) {
      $_SESSION["username"]=$username;
      header("location: ./session.php");
   }
   else{
      $_SESSION['error'] = "Contraseña Incorrecta";
      header("location: ./error.php");
   }
}

?>
