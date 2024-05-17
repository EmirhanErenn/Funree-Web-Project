<?php
session_start();
// Oturumu sonlandır
session_destroy();
// Kullanıcıyı giriş sayfasına yönlendir
header("Location: Giris/giris.html");
exit;
?>
