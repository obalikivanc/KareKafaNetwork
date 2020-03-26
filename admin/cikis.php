<?
session_start();
ob_start();
session_destroy();
echo "Çıkış Basarili. Ana Sayfaya Yönlendiriliyorsunuz";
header("Refresh: 2; url=login.php");
ob_end_flush();

 ?>