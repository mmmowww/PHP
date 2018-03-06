<!DOCTUPE html>
<html>
<head>
<meta charset= "UTF-8"/>
<title>OKO</title>
<style>
</style>
</head>
<body>
<?php
 

// Бежим в Бд
$host = 'localhost'; // адрес сервера 
$database = 'compstore'; // имя базы данных
$user = 'root'; // имя пользователя
$password = '1234567'; // пароль

// Делаем соеднинение
require_once 'index.php'


$link = mysqli_connect($host, $user, $password, $database) 
	or die("Ошибка " . mysqli_error($link));
// Мы в бд 
//{
//
//}
	
	


?>
<H1>Добро пожаловать в форум программиста</H1>
Здесь вы сможете общаться со мною, а я с вами
<form method="get" action="index.php" >
Введите ваше имя 
<input type="text" name="name">
<br/>
Введите Ваш текст 
<textarea name="comment"></textarea>
<br/>
Ваш ip 
<input type="text" name="ip">
<br/>
<button type ="submit">Отправить</button>
</form>
<?
$ip;
$ip2[];
$name;
$text;
$_GET['name'] = $name;
$_GET['text'] = $text;
$_GET['ip'] = $ip;
 
 echo $name;
 echo $text;
 echo $ip2;

  echo $_SERVER["REMOTE_ADDR"];
  print_r($_SERVER); 

?>


<?php
  echo $_SERVER["REMOTE_ADDR"];
  mysqli_close($link); // Отключаем соединение
?>
</body>
</html>