<?php
require_once 'App/init.php';


$XiaomiNote9 = new Xiaomi('Note 9');
echo $XiaomiNote9->getTipe();

echo "<br>";

$hp1 = new Xiaomi("Xiaomi", "blackshark", 5);
echo $hp1->nyalakan();
echo "<br>";
echo $hp1->volumeDown(0);
echo "<br>";
echo $hp1->volumeUp(0);













?>