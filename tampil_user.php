<?php
echo "<h2>User</h2>
<form method=POST action=daftar_user.php>
<input type=submit value='Tambah User'>
</form>
<table>
<tr><th>No</th><th>Username</th><th>Password</th><th>Aksi</th
></tr>";
include "koneksi.php";
$sql="select * from user order by id_user";
$tampil = mysqli_query($con,$sql);
if (mysqli_num_rows($tampil) > 0) {
$no=1;
while ($r = mysqli_fetch_array($tampil))
{
echo "<tr><td>$no</td><td>$r[id_user]</td>
<td>$r[nama]</td>
<td>$r[sandi]</td>
<td><a href='hapus_user.php?id=$r[nama]'>Hapus</a></td>
</tr>";
 $no++;
}
echo "</table>";
} else {
 echo "0 results";
 }
 mysqli_close($con);
?>
