<?php
session_start();
#**************** koneksi ke mysql *****************#
include "koneksi.php";
#***************** akhir koneksi ******************#
#jika ditekan tombol login
if(isset($_POST['login'])) { 
 $username = $_POST['username'];
 $password = $_POST['password'];
 // cek username yang diketik oleh user sama tidak dengan username yang ada didatabase
 $sql = mysql_query("SELECT * FROM admin WHERE username='$username' 
 && password='$password'");
 
 $num = mysql_num_rows($sql);
 $sess = mysql_fetch_array($sql);
 if($num==1) {
 // login benar //
 $_SESSION['username'] = $username;
 $_SESSION['password'] = $password;
 $_SESSION['nama'] = $sess['nama'];
 ?><script language="JavaScript">
 alert('Anda berhasil login');
document.location='dashboard.php'</script><?php
 } else {
 // jika login salah //
 ?><script language="JavaScript">
	alert('Username atau password Anda salah. Silahkan Login Kembali'); 
	document.location='index.php'</script><?php
 }}
?> 