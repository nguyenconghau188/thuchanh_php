<?php 

// $name = array('hihi', 'hau', 'sida', 'sui_mao_ga', 'hiu');
// $leng = array_map('strlen', $name);
// array_push($name, 'haha');
// var_dump($name);
// var_dump($leng);
// echo '<br>';
// $element = array_keys($leng, min($leng));
// var_dump($element);
// echo $element[0];
// //echo 'min->'.$name[array_keys($leng, min($leng))].' ---- max->'.max($leng);
// 
	$arr = array(5,3,2,7,3,1,9,8);
	//echo count($arr);

		$left = 0;
		$right = count($arr)-1;
		//quickSort($arr, $left, $right);
	QuickSort($arr, $left, $right);
	echo 'string';

	function QuickSort($arr, $left, $right)
	{
		if ($arr == null || count($arr) == 0)
			return;
		if ($left >= $right)
			return;
		$middle = $left + ($left + $right)/2;
		$pivot = $arr[$middle];
		$i = $left;
		$j = $right;
		while ($i <= $j) {
		    while ($arr[$i] < $pivot) {
		        $i++;
		    }
		    while ($j > $pivot) {
		        $j++;
		    }
		    if ($i <= $j){
		    	$temp = $arr[$i];
		    	$arr[$i] = $arr[$j];
		    	$arr[$j] = $temp;
		    }
		}
		if($left < $i){
			QuickSort($arr, $left, $i);
		}
		if($right > $j){
			QuickSort($arr, $j, $right);
		}
		echo 'quickSort';
	}

 ?>