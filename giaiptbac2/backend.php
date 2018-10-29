<?php 

$a = isset($_POST['a']) ? $_POST['a'] : false;
$b = isset($_POST['b']) ? $_POST['b'] : false;
$c = isset($_POST['c']) ? $_POST['c'] : false;

if ($a == 0) {
	$x = - ($c/$b);
	$result = "x = <input type='text' style='width: 60px;' value='".$x."'</input>";
	echo ''.$result;
}
else {
	$delta = ($b * $b) - (4 * $a * $c);
	if ($delta == 0) {
		$x = - ($b/(2*$a));
		$result = "x1 = x2 = <input type='text' style='width: 60px;' value='".$x."'</input>";
		echo ''.$result;
	}
	else if ($delta < 0) {
		$result = "Phương trình vô nghiệm";
		echo ''.$result;
	}
	else {
		$x1 = round((-$b + sqrt($delta))/(2*$a), 3);
		$x2 = round((-$b - sqrt($delta))/(2*$a), 3);
		$result = "x1 = <input type='text' style='width: 60px;' value='".$x1."'</input><br>x2 = <input type='text' style='width: 60px;' value='".$x2."'</input>";
		echo ''.$result;
	}
}

 ?>