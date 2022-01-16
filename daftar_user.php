<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background: -webkit-linear-gradient(bottom,#800080,#DDA0DD);
        background-repeat: no-repeat;
    }
    #card{
        background: oldlace;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0,0,0,0.65);
        height: 410px;
        margin: 6rem auto 8.1rem auto;
        width: 329px;
    }
</style>
<body>
    <div id="card">
    <?php
echo "<h2>Tambah User</h2>
<form method=post action=input_user.php>
<table>
<tr><td>Username</td><td> : <input name='nama' type='text'></td></tr>
<tr><td>Password</td><td> : <input name='sandi' type='password'></td></tr>
<tr><td colspan=2><input type='submit' value='SIMPAN'></td></tr>
</table>
</form>";
?> 
    </div>
</body>
</html>