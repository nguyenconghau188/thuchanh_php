<?php 

$a = isset($_POST['value1']) ? (float)$_POST['value1'] : false;
$b = isset($_POST['value2']) ? (float)$_POST['value2'] : false;
$c = isset($_POST['value3']) ? (float)$_POST['value3'] : false;

$result = ($c - $b)/$a;

echo "".$result;

 ?>