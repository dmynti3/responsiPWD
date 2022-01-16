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
    #card-content {
      padding: 12px 44px;
    }
    #card-title {
      font-family: "Raleway Thin", sans-serif;
      letter-spacing: 4px;
      padding-bottom: 23px;
      padding-top: 13px;
      text-align: center;
    }
    .underline-title {
      background: -webkit-linear-gradient(right, #800080, #DDA0DD);
      height: 2px;
      margin: -1.1rem auto 0 auto;
      width: 89px;
    }
</style>
<body>
    <div id="card">
    <div id="card-content">
  <div id="card-title">
    <h1>D'Rejuva</h1>
    <h2>LOGIN</h2>
    <div class="underline-title"></div>
  </div>
</div>
<?php
echo "
<form method=post action=cek_login.php>
<table>
<tr><td>Username</td><td> : <input name='nama' type='text'></td></tr>
<tr><td>Password</td><td> : <input name='sandi' type='text'></td></tr>
<tr><td>Captcha<br>
<img src='captcha.php'/></td><td>:<input name='captcha_code'type='text'></td></tr>
<tr><td colspan=2><input type='submit' value='LOGIN'></td></tr>
</table>
</form>";
?>
</div>
</body>
</html>