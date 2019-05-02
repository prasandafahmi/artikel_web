<?php ob_start();
include "koneksi.php";

$username   = $_POST['username'];
$password  = $_POST['password'];

mysql_query("INSERT INTO admin(username,password)
VALUE('$username','$password')")or die(mysql_error());

// var_dump($username,$password);
header('location:tampiladmin.php');
?>