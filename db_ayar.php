<?php
$host = "mysql.hostinger.web.tr";
$mysqladi = "u463482943_feyzu";
$mysqlsifre ="Feyzu123";
$db = "u463482943_uye";
@mysql_connect ("$host", "$mysqladi", "$mysqlsifre") or die ("MySql Baglantisinda Hata");
@mysql_select_db ("$db") or die ("Üye Veritabanina Baglanilamadi");
?>