<?php
include "koneksi.php";
include "dashboard.php";
?>
<style type="text/css">
	img{
		width: 60px;
		height: 60px;
	}
</style>
<center>

<form action="search_artikel.php" method="GET">
	<label>Cari :</label>
		<select name="filter">
		<option value="judul">
			Judul
		</option>
		<option value="penulis">
			penulis
		</option>
	</select>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>

	<table border=1>
		<tr>
			<td><b><center>No</td>
			<td><b><center>judul</td>
			<td><b><center>penulis</td>
			<td><b><center>isi</td>
			<td><b><center>gambar</td>
			<td><b><center>tanggal</td>
			<td><b><center>Delete</td>
			<td><b><center>Edit</td>
		</tr>

<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>

<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$query = mysql_query("SELECT * from admin where username like '%".$cari."%'");				
	}else{
		$query = mysql_query("SELECT * FROM admin");		
	}
	$no = 1;
	while($var = mysql_fetch_array($query)){
	?>
<tr>
	<td><?php echo $no; ?></td>
	<td><?php echo $var['judul']; ?></td>
	<td><?php echo $var['penulis']; ?></td>
	<td><?php echo $var['isi']; ?></td>
	<td><img src="../img/gambar/<?php echo $var['gambar']; ?>"></td>
	<td><?php echo $var['tanggal']; ?></td>
		<td>
			<center>
				<a href="delete_artikel.php?id_artikel=<?php echo $var['id_artikel']; ?>" onclick="javascript: return confirm('Anda Yakin Hapus?');">Delete</a>
			</td>
		<td>
			<center>
				<a href="edit_artikel.php?id_artikel=<?php echo $var['id_artikel']; ?>">Edit</a>
			</center>
		</td>
</tr>
<?php
$no++;
}
?>