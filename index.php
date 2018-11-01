<?
$may = rand();
setcookie("Session",$may,time()+3600*24*30*12); // Сессия хрониться год
$may; //Номер сессии к которой в последствии будет прикручен и номер заказа
?>
<?php
$session  =  $_COOKIE['Session'];
echo $session;
$sessionName = "SessionNumer";
$sessionName.=$session;
echo "</br>====</br>";
var_dump($sessionName);
define($sessionName,$MyBay); // Доём обьекту имя от куки




//namespace Mr\god;
/// В репризиотории сдлеать в нём механику  как и у компанента?
// Апликйдж и Сторадже сделать у себя
//Магазин от и до
// 2ю26
require_once 'SessionBay.php'; // Таблица контроля магазина
$StatusNumero = $_COOKIE['Session'];

$Shop = [  
"ShopS" => FALSE,	      //Рендор товаров из бд	
"Rendor" => FALSE,      //Рендор Товаров  
"Tresh" => FALSE,	    //Рендор корзины
"Status" => FALSE,    // Рендор статуса товара 
"Over" => FALSE,     // Рендо прихода статуса
];		
	
//var_dump($_SERVER[REQUEST_URI]); // Заскриптованный путь для покупающего
$MyBay = new Bay;
 
$MyBay->Bay();
if($_GET != NULL) $MyBay->MayTresh();
$MyBay->Status($may);
$MyOrder = new Over;
$MyOrder->Answer($may);
$MyBay->Over();


		
		
















		
?>