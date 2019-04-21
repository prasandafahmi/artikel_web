<?php
include "koneksi.php";
include "dashboard.php";
?>
<center>
	<table border=1>
		<tr>
			<td><b><center>No</td>
			<td><b><center>Username</td>
			<td><b><center>password</td>
			<td><b><center>Delete</td>
			<td><b><center>Edit</td>
		</tr>

<?php
$query=mysql_query("SELECT * FROM admin ORDER BY id_admin");
$no=1;
while($var=mysql_fetch_array($query)) { ?>
<tr>
	<td><?php echo $no; ?></td>
	<td><?php echo $var['username']; ?></td>
	<td><?php echo $var['password']; ?></td>
		<td>
			<center>
				<a href="delete_admin.php?id_admin=<?php echo $var['id_admin']; ?>" onclick="javascript: return confirm('Anda Yakin Hapus?');">Delete</a>
			</td>
		<td>
			<center>
				<a href="edit_admin.php?id_admin=<?php echo $var['id_admin']; ?>">Edit</a>
			</center>
		</td>
</tr>
<?php
$no++;
}
?>