<?php
require_once 'App/init.php';

// Tipe Produk
$XiaomiNote9 = new Xiaomi("Xiaomi", "Note 9");
$XiaomiNote10 = new Xiaomi("Xiaomi", "Note 10");

$SamsungGalaxy = new Samsung("Samsung", "Galaxy Z Flip4");

$OppoRealme = new Oppo("Oppo", "Realme 9 Pro");



//Daftar Produk
$daftarHape = new App();
$daftarHape->tambahTipe($XiaomiNote9);
$daftarHape->tambahTipe($XiaomiNote10);
$daftarHape->tambahTipe($SamsungGalaxy);
$daftarHape->tambahTipe($OppoRealme);
echo $daftarHape->cetak();

echo "<hr>";


echo $OppoRealme->nyalakan();
echo $OppoRealme->getMerk();
echo "<br>";
echo $OppoRealme->getTipe();
echo "<br>";
echo $OppoRealme->getVolume();
$OppoRealme->volumeUp(); // 1
$OppoRealme->volumeUp(); // 2
$OppoRealme->volumeUp(); // 3
$OppoRealme->volumeUp(); // 4
$OppoRealme->volumeUp(); // 5
$OppoRealme->volumeUp(); // 6 (Maksimal Volume 5);
echo $OppoRealme->getVolume();
echo $OppoRealme->volumeDown();
echo $OppoRealme->capture();
echo "<br>";
echo $OppoRealme->matikan();

echo "<hr>";





















?>