<?php
if (isset($_REQUEST["kullanici"])) {
include("db_ayar.php");
$sql = ("select * from uye");
}
else {
header ("Location: uyari.html");
}


?>






<a href="cikis.php">��k��
<? echo $_REQUEST["kullanici"]; ?></a>


<html>
<head>
<title>Profil</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254�>
</head>
<body>
<table border="0� width="80%">
<tr>
<center>

<h1>�ye Giri�i Yapt���n�z ��in Bu Sayfaya Ula�abiliyorsunuz</h1>
</center>
</tr>
</table>
</body>