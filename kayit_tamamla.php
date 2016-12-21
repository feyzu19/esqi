<?php
$ad = $_POST['ad'];
$kullaniciadi = $_POST['kullaniciadi'];
$sifre = $_POST['sifre'];
$posta = $_POST['posta'];
if(empty($ad)){
echo("<center><b>Adýnýzý Yazmadýnýz. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}elseif(empty($kullaniciadi)){
echo("<center><b>Kullanýcý Adýnýzý Yazmadýnýz. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}elseif(empty($sifre)){
echo("<center><b>Þifrenizi Yazmadýnýz. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}elseif(empty($posta)){
echo("<center><b>E-Postanýzý Yazmadýnýz. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}else{
include("db_ayar.php");
$sql = "insert into uye (ad, kullaniciadi, sifre, email, hakkimda)
values ('$ad', '$kullaniciadi', '$sifre', '$posta', '$hakkimda')";
$kayit = mysql_query($sql);
}
if (isset ($kayit)){
echo "Üye Kaydýnýz Yapýlmýþtýr";
}
else {
echo "Kayýt Baþarýsýz sanane@banane.com adresinden iletiþime geçin";
}
?>