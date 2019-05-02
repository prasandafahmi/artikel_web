<?php ob_start();
include "koneksi.php";

$judul   = $_POST['judul'];
$penulis  = $_POST['penulis'];
$isi  = $_POST['isi'];
$nama_gambar = $_POST['gambar'];

if (isset($_POST['insert_artikel'])){  
 	$dir_upload = "../img/gambar/";  
 $nama_gambar  = $_FILES['gambar']['name'];  
 // 
  if (is_uploaded_file($_FILES['gambar']['tmp_name'])) {  
   $cek = move_uploaded_file ($_FILES['gambar']['tmp_name'], 
   $dir_upload.$nama_gambar); 
     }
 }

mysql_query("INSERT INTO artikel(judul,penulis,isi,gambar,tanggal)
VALUE('$judul','$penulis','$isi','$nama_gambar',NOW())")or die(mysql_error());

// var_dump($gambar);
 header('location:tampilartikel.php');
?>