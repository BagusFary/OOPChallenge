<?php
require_once 'App/init.php';


$hp1 = new Xiaomi("Xiaomi", "Blackshark", "2");


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




?>