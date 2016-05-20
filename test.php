<?php


//$ext=new Mongo('mongodb://120.27.6.97:27017/ljw');

$m=8;
$n=8;
$arr=array();
for($i=1;$i<=$m;$i++){
	$arr[]=$i;
}

if($m>$n) $s=1;
if($m==$n) $s=0;
if($m<$n) $s=-1;
for($i=1;$i<=count($arr);$i++){
	
}
if($m===$n){
	unset($arr[$n-1]);
}
if($m>$n){
	$yu=$m%$n;
	unset($arr[$yu-1]);
}
if($m<$n){
	$yu=$n%$m;
	unset($arr[$yu-1]);
}
$num=5%7;


var_dump($arr);
//$mem->connect("120.27.6.97","11211");
//echo $mem->get("num1");
