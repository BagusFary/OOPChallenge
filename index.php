<?php
require_once 'App/init.php';


$hp1 = new Xiaomi("Xiaomi", "Blackshark", 1);
$hp2 = new Samsung("Samsung", "Galaxy Z Flip4", 1);
$hp3 = new Oppo("Oppo", "Realme 9 Pro", 1);

echo $hp1->nyalakan();
echo "<br>";
echo $hp1->matikan();
echo "<br>";
echo $hp1->volumeUp(3);
echo "<br>";
echo $hp1->volumeDown(1);
echo "<br>";
echo $hp1->UI();
echo "<br>";
echo $hp1->getter();
echo "<br>";
echo $hp1->capture();
echo "<br>";
echo $hp1->setUIVersion(12);

echo "<hr>";

echo $hp2->nyalakan();
echo "<br>";
echo $hp2->matikan();
echo "<br>";
echo $hp2->volumeUp(3);
echo "<br>";
echo $hp2->volumeDown(1);
echo "<br>";
echo $hp2->UI();
echo "<br>";
echo $hp2->getter();
echo "<br>";
echo $hp2->capture();
echo "<br>";
echo $hp2->setUIVersion(12);

echo "<hr>";

echo $hp3->nyalakan();
echo "<br>";
echo $hp3->matikan();
echo "<br>";
echo $hp3->volumeUp(3);
echo "<br>";
echo $hp3->volumeDown(1);
echo "<br>";
echo $hp3->UI();
echo "<br>";
echo $hp3->getter();
echo "<br>";
echo $hp3->capture();
echo "<br>";
echo $hp3->setUIVersion(12);

echo "<br>";

$jenengtipe = new Xiaomi("NOTE 9");










?>