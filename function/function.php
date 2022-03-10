<?php
function sum($a,$b){
	echo $b + $a;
	echo '<br>';
}

function sum2(&$a,$b){
	echo $b + $a;
	echo '<br>';
	$a = 11;
}

function my_array_kay($arr){
	$data = [];
	foreach($arr as $k => $v){
		$data[] = $k; 
	}
	return $data;
}
?>