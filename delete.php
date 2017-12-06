<?php
$id=$_REQUEST['id'];
include './db.php';
echo $query=("DELETE FROM tbl_user WHERE cod_user=$id");

//$mysqli->query($query);
//header('location: ./showlist.php');