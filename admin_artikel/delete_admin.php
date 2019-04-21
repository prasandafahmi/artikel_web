<?php 
ob_start();
 include "koneksi.php";
 mysql_query("delete from admin where id_admin='$_GET[id_admin]'");
 header('location:tampiladmin.php');

?>