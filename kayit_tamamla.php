<?php
$ad = $_POST['ad'];
$kullaniciadi = $_POST['kullaniciadi'];
$sifre = $_POST['sifre'];
$posta = $_POST['posta'];
if(empty($ad)){
echo("<center><b>Ad�n�z� Yazmad�n�z. L�tfen Geri D�n�p Doldurunuz.</b></center>");
}elseif(empty($kullaniciadi)){
echo("<center><b>Kullan�c� Ad�n�z� Yazmad�n�z. L�tfen Geri D�n�p Doldurunuz.</b></center>");
}elseif(empty($sifre)){
echo("<center><b>�ifrenizi Yazmad�n�z. L�tfen Geri D�n�p Doldurunuz.</b></center>");
}elseif(empty($posta)){
echo("<center><b>E-Postan�z� Yazmad�n�z. L�tfen Geri D�n�p Doldurunuz.</b></center>");
}else{
include("db_ayar.php");
$sql = "insert into uye (ad, kullaniciadi, sifre, email, hakkimda)
values ('$ad', '$kullaniciadi', '$sifre', '$posta', '$hakkimda')";
$kayit = mysql_query($sql);
}
if (isset ($kayit)){
echo "�ye Kayd�n�z Yap�lm��t�r";
}
else {
echo "Kay�t Ba�ar�s�z sanane@banane.com adresinden ileti�ime ge�in";
}
?>