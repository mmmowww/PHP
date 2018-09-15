<!doctype html>
<html>
<head>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<?php
  // 1
  $iter = 100;
  $i = 0;
  while($i < $iter){
	  $i++;
	  $numer = $i;
	  $numer = $numer % 3;
	  if($numer == 0){
		  echo $i;
		  echo "</br>";
	  }
	  
  };

?>
<script type="text/javascript">
//Для проверки можно удалить этот JS скрипт
var body = $('.body');
$('body').empty();
console.log(body);
</script>
<?
$num = 12;
$i = 0;

do{
	$nam = $i;
	if($nam == 0){
		echo $i;
		echo " --- Это ноль";
		echo "</br>";
		
	};
	$nam = $nam % 2;
	echo "</br>"; 
	
	if($nam == 1 ){
		if ($i != 0 and $nam > 0){
		echo $i;
		echo " --- Это не чётная";
		};
	};
	if($nam == 0){
		echo $i;
		echo " --- Это  чётная";
	};
	
	$i++;
}while($i<=$num);


?>
<script type="text/javascript">
//Для проверки можно удалить этот JS скрипт
var body = $('.body');
$('body').empty();
console.log(body);
</script>
<?
$map = [
'Московская Область' => [Москва,Зелиноград,Клин,],
'Ленинградская Область' => [Питер,Всеволожск,Павловск,Кронштадт,],
'Рязанская Область' => [Резань,Касимов,Сасово,],
];


foreach($map as $key => $value){
	echo "</br>";
	echo $key;
	echo "</br>";
	foreach($value as $key => $Val){
		echo "  ";
		echo $Val;
		echo "  ";
	};
}
?>
<script type="text/javascript">
//Для проверки можно удалить этот JS скрипт
var body = $('.body');
$('body').empty();
console.log(body);
</script>
<?



	$nadpis = "abcz";
    $answer ="";
	$length = [
"a" => "ей",
"b" => "би",
"c" => "си",
"d" => "ди",
"e" => "и",
"f" => "эф",
"g" => "джи",
"h" => "эйч",
"i" => "ай",
"j" => "джей",
"k" => "кей",
"l" => "эл",
"m" => "эм",
"n" => "эн",
"o" => "оу",
"p" => "пи",
"q" => "кью",
"r" => "эр",
"s" => "эс",
"t" => "ти",
"u" => "ю",
"v" => "ви",
"w" => "дабл-ю",
"x" => "экс",
"y" => "уай",
"z" => "зед",
];
////////////////////
	$length2 = [
"а" => "a",
"б" => "be",
"в" => "ve",
"г" => "ge",
"д" => "de",
"ж" => "je",
"з" => "ze",
"и" => "i",
"к" => "ke",
"л" => "le",
"м" => "me",
"н" => "ne",
"о" => "o",
"п" => "pe",
"р" => "re",
"с" => "s",
"т" => "te",
"ч" => "ce",
"ш" => "she",
"щ" => "she",
"ъ" => ">",
"ы" => "*",
"ь" => "<",
"э" => "a",
"ю" => "you",
"я" => "ia",
];	
$resault = "";
$fin = sizeof($length);	
	foreach($length as $key => $value){
		     $i = 0;
			 
		     $siz = strlen ($nadpis); // 4
		     while($i <= $siz){
		     $res = substr($nadpis, $i, 1);
			 
				 if($res === $key){
					 
					 $resault = $resault.$value;
				 }
				 $i++;
			 }
	
	
	
	        
	};
			 
			 
			 
echo $resault;			 
?>
<script type="text/javascript">
//Для проверки можно удалить этот JS скрипт
var body = $('.body');
$('body').empty();
console.log(body);
</script>
<?

function EXIST(){
	$EX = "ASS 1234 DGB";
	$DEX = str_replace(" ","-",$EX);
	echo $DEX;
};

EXIST();

?>
<script type="text/javascript">
//Для проверки можно удалить этот JS скрипт
var body = $('.body');
$('body').empty();
console.log(body);
</script>
<? 

for($i = 0; $i <= 10 ; function ($i){
	echo $i;
	$i++;
	return $i;
} );

?>


</body>
</html>