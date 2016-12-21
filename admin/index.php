<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../uyelik.css" type="text/css" rel="stylesheet">
<link href="../img/favicon.fw.png" rel="shortcut icon">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://fonts.googleapis.com/css?family=Raleway:100|Roboto:300" rel="stylesheet">

<title>Yeni Üye Kaydı</title>
</head>
<body>


<nav id="menu">
<ul>
<li> Kayıt</li>
<li style="	border-bottom:white 2px solid;">ANASAYFA</li>


</ul>


</nav>







<div class="container1">
  <img class="img1" src="../img/slider2c.jpg" alt="Norway" width="1000" height="300">
  <div class="center1">
  <div class="tablo1">
  
  

  

<center>
<?php
if (!$hata =="") {
echo '<html><div style="position:fixed;z-index:999;">GİRMEDİİİ</div></html>';
echo 'Şifre veya Kullanıcı Adı Yanlış. Tekrar Deneyin<br>';
}
?>
</center>

<img class="basfoto" width="200px" height="200px" src="../img/slider2c.jpg" class="w3-circle" alt="Norway" style="width:50%">





<form style="float:left;" action="giris_tamamla.php" method="post">

<table  cellspacing="1"   class="tablo" fpstyle="6,011111100">

  <tr>
    <td  colspan="2" style="box-shadow:1px 1px 30px black;"  ><p align="center">Üye Girişi</td>
  </tr>
  
  <tr>
    <td>Üye Adı:</td>
    <td >&nbsp;&nbsp;<input type="text" name="kullaniciadi" size="20"></td>
  </tr>
  
  <tr>
    <td  >Şifre:</td>
    <td  >&nbsp;&nbsp;<input type="password" name="sifre" size="20"></td>
  </tr>
  
  <tr>
    <td colspan="2" height="1">
    <p align="center"><input type="submit" class="gonderbuton" value="Giriş"></td>
  </tr>
  
  
</table>
</form>

<button class="signpage"><a href="signup">Üye ol</a></button>
  
  
  
 
</div>
</div>
</div>


<
</body>
</html>