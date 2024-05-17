<?php 
$use="localhost";
$vtKullanici="root";
$vtSifre="";
$vtAdi="dervis";
$baglan=mysqli_connect($use,$vtKullanici,$vtSifre,$vtAdi);

if(!$baglan)
{
    die("veritabanı baglanti islemi basarısız".mysqli_connect_error());
}
else
{
    
}
?>