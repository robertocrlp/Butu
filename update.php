<?php
session_start();
include './db.php';
$username = $_POST["username"];
$password = $_POST['password'];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];


$passwordd=base64_encode( $_POST['password'] );

if($_SESSION['username']==$username){
   $sentence="UPDATE tbl_user SET username='$username',password='$passwordd',firstname='$firstname',lastname='$lastname' WHERE username='$_SESSION[username]'";
   echo '1';
   $mysqli->query($sentence);
   header('location: ./session.php');
}
else{
   $row=$mysqli->query("SELECT * FROM tbl_user WHERE username='$username'");
   if(($row->num_rows)>0)
   {
      $_SESSION['error']='El Nombre de Usuario Ya se encuentra registrado';
      echo '52';
      $mysqli->query($sentence);
      header('location: ./errorp.php');
   }
   else{
      $sentence="UPDATE tbl_user SET username='$username',password='$passwordd',firstname='$firstname',lastname='$lastname' WHERE username='$_SESSION[username]'";
      $_SESSION['username']=$username;
      echo '3';
      $mysqli->query($sentence);
      header('location: ./session.php');

   }
   //$user = $row->fetch_assoc();
}



/*if($mysqli->query($sentence)){
   echo "funciona";
}
else{
   $_SESSION['username']=$username;
   $_SESSION['error']='El nombre de usuario ya existe';
   header('location: ./session.php');
}
//header('location: ./session.php');

?>
