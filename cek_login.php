<?php
session_start();
include "koneksi.php";
$username = $_POST['nama'];
$pass=($_POST['sandi']);
$sql="SELECT * FROM user WHERE nama='$username' AND sandi='$pass'";
if($_POST["captcha_code"]==$_SESSION["captcha_code"]){
$login=mysqli_query($con,$sql);
$ketemu=mysqli_num_rows($login);
$r= mysqli_fetch_array($login);
if ($ketemu > 0){
// session_start();
 $_SESSION['user'] = $r['nama'];
 $_SESSION['passuser'] = $r['sandi'];
 header('location:halaman_utama.php');
//echo"USER BERHASIL LOGIN<br>";
//echo "username =",$_SESSION['user'],"<br>";
//echo "password=",$_SESSION['passuser'],"<br>";
//echo "<a href=logout.php><b>LOGOUT</b></a></center>";
}
else{
echo "<center>Login gagal! username & password tidak benar<br>";
echo "<a href=index.php><b>ULANGILAGI</b></a></center>";
}
mysqli_close($con);
}
else{
    echo "<center>Login gagal! captcha tidak sesuai<br>";
    echo "<a href=index.php><b>ULANG LAGI</b></a></center>";
}
?>