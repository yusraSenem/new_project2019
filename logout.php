<?php
session_start();
ob_start();
session_destroy();
echo "<center>Çıkış Yaptınız. Ana Sayfaya Yönlendiriliyorsunuz.</center>";
header("Refresh: 2; url=index.html");
ob_end_flush();
?>