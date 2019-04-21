<?php 
ob_start();
 include "koneksi.php";
 mysql_query("delete from artikel where id_artikel='$_GET[id_artikel]'");
 header('location:tampilartikel.php');

?>