<?php
$arrNilai = array ("Fitri" => 80, "Ayik" => 90, "Siti" => 75,
"Bondan" => 85);
echo "<b>Array sebelum pengurutan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
sort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah pengurutan dengan sort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
rsort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah pengurutan dengan rsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
?>