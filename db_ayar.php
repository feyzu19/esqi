<?php
$host = "dbhostugirilecek";
$mysqladi = "girisadi";
$mysqlsifre ="sifre";
$db = "veritabanitabloismi";
@mysql_connect ("$host", "$mysqladi", "$mysqlsifre") or die ("MySql Baglantisinda Hata");
@mysql_select_db ("$db") or die ("Üye Veritabanina Baglanilamadi");
?>
