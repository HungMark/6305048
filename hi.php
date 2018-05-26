<?php
$input = $argv;
$two = explode(" ",$input[1]);
if( is_numeric($two[0])&& is_numeric($two[2])){
if($two[1]==='+'){
	$num = $two[0]+$two[2];
	echo $num;
	}
elseif($two[1]==='-'){
	$num = $two[0]-$two[2];
	echo $num;}
elseif($two[1]==='*'){
	$num = $two[0]*$two[2];
	echo $num;}
elseif($two[1]==='/'){
	$num = $two[0]/$two[2];
	echo $num;}
else
	echo "符號輸入錯誤";}
else
	echo "數字輸入錯誤";
?>