<?php ob_start();
include "koneksi.php";
$id_admin = $_POST['id_admin'];
$username 	= $_POST['username'];
$password  = $_POST['password'];

$query=mysql_query("update admin set username='$username', password='$password' where id_admin='$id_admin'");
header('location:tampiladmin.php');
?>