<!doctype html>
<html>
<head>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<?php
    $a = 5;
    $b = '5';
    var_dump($a == $b);         // Почему true? // Сравнение по значению
	echo "<br>";
    var_dump((int)'012345');     // Почему 12345? // Преобразование в инт
	echo "<br>";
    var_dump((float)123.0 === (int)123.0); // Почему false? 
	// Преобразование в два разных формата в инт и флоат, а их сравнение доёт лож
	echo "<br>";
    var_dump((int)0 === (int)'hello, world'); // Почему true?
	//Вот тут-то я и не знаю почему так
?>

<script type="text/javascript">
// Для проверки можно удалить этот JS скрипт
var BODY = $('.body');
$('body').empty();
console.log(BODY);
</script>

<?php
$HEAD;
$nav;
$content;
///////////
$HEAD = '<div class = "HEAD"> <h1>Welcome</h1> </br> <p> Мы рады тебя видеть</p></div>';
$nav = '<a href = "#">content1</a>    <a href = "#">content2</a> <a href = "#">content3</a>';
$content = '<div class = "content"><h2>Загаловок</h2> </br> Тут рыбий при рыбий текст</div>';
///////////
echo $HEAD;
echo '</br>';
echo $nav;
echo '</br>';
echo $content;
echo '</br>';
?>

<script type="text/javascript">
// Для проверки можно удалить этот JS скрипт
var BODY = $('.body');
$('body').empty();
console.log(BODY);
</script>

<?php 
$x = 10;
$y = 250;
$x = $x + $y;
echo '</br>';
echo $x;
echo '</br>';
$y = $x - $y;
echo '</br>';
echo $y;
echo '</br>';
$x -= $y;
echo '</br>';
echo $x;
?>





</body>
</html>