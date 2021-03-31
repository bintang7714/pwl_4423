<?php
$transportasi = array('becak', 'andong', 'car', 'ojek');
echo "<pre>";
print_r ($transportasi);
echo "</pre>";
$mode = current($transportasi);
echo $mode."<br>"; // $mode = 'becak';
$mode = next($transportasi);
echo $mode."<br>"; // $mode = 'andong';
$mode = current($transportasi);
echo $mode."<br>"; // $mode = 'andong';
$mode = prev($transportasi);
echo $mode."<br>"; // $mode = 'becack';
$mode = end($transportasi);
echo $mode."<br>"; // $mode = 'ojek';
$mode = current($transportasi);
echo $mode."<br>"; // $mode = 'ojek';
?>