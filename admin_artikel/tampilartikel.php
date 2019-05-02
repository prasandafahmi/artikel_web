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
$query=mysql_query("SELECT * FROM artikel ORDER BY id_artikel");
$no=1;
while($var=mysql_fetch_array($query)) { ?>
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