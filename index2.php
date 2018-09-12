<!doctype html>
<html>
<head>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<?php
    $a = -2;
	$b = -8;
	function DM($a,$b){
	   if(is_int($a) and is_int($b)){
		  if ($a >= 0 and $b >=0){
		  echo "--!--";
		  $a = $b - $a;
		  $a * 1;
		  echo $a;
		  echo "</br>";
		  };
		  if($a < 0 and $b < 0){
			  $a = $a * $b;
			 echo $a;
			 echo "</br>";
		  };
		  
		  if($a > 0 and $b < 0){
			  $a = $a+$b;
			  echo $a;
			  echo "</br>";
		  };
		  if($a < 0 and $b > 0){
			  $a = $a+$b;
			  echo $a;
			  echo "</br>";
		  };
		  
		  };
	};
	DM($a,$b);
?>
<script type="text/javascript">
//Для проверки можно удалить этот JS скрипт
var body = $('.body');
$('body').empty();
console.log(body);
</script>
<?
$a;
$b;
function MegaMath($a,$b){
	echo $a + $b;
	echo '</br>';
	echo $a - $b;
	echo '</br>';
	echo $a * $b;
	echo '</br>';
	echo $a / $b;
	echo '</br>';
	echo $a % $b;
	echo '</br>';
};
MegaMath($a,$b);
?>
<script type="text/javascript">
//Для проверки можно удалить этот JS скрипт
var body = $('.body');
$('body').empty();
console.log(body);
</script>
<?
$arg1=0;
$arg2 = 0; 
$operation = 0;
function mathOperation($arg1, $arg2, $operation){
switch($operation){
case 1:$operation  =	$arg1 + $arg2;
return $operation;
break;
	
case 2:$operation  =	$arg1 - $arg2;
return $operation;
break;

case 3:$operation  =	$arg1 * $arg2;
return $operation;
break;

case 4:$operation  =	$arg1 / $arg2;
return $operation;
break;
}; 
};
?>

<script type="text/javascript">
//Для проверки можно удалить этот JS скрипт
var body = $('.body');
$('body').empty();
console.log(body);
</script>
<?
$val = 3;
$pow = 6;
function power($val, $pow){
	      //    3     2
if ($pow  == 0) {
	echo $val;
	return 1;}
else {
	
	$val = $val * $pow;
	$pow--;
	//echo $val;
	return power($val,$pow);
	
}	
}
power($val, $pow);
/// Скажу честно вроде работает но чувство осталось
/// Что сделал как-то не так и очень криво
?>




</body>
</html>
