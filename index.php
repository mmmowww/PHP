<?php
class BaySate{
	public $idSession; // id сесси
	public $idItem;  // Айди товара
	public $Qvantity; // Их количество
	public function GG(){
		echo "test";
	}
	
}
class BayLook extends BaySate {
	public $tame;      // = int time(void); // Выесняем время закза для подготовки корзины
	public $summ; // Узнаём суму
	public $approval = bool; // Выесням одобрил ли посетитель заказ
	public function GG(){
		echo "test";
	}
}

class BayStatus extends BaySate {
	
	public $status;
	public function GG(){
		echo "test";
	}
}
class BayOk extends BayStatus {
	public function GG(){
		echo "test";
	}
	public $ok;
}

$UserSession = new BaYSate();
$UserSession -> idSession = $idSession;  
$UserSession -> idItem = $idItem; 
$UserSession -> Qvantity = $Qvantity;
if(!isset($UserSession -> idSession) AND !isset($UserSession -> idItem) AND !isset($UserSession -> Qvantity)) // проверяем заполнены ли они
{
	$userLook = new BayLook;
	$userLook -> tame = time(); // закидываем туда время организацыии (тот момент когда посетитель посматрел и одобрил заказ)
	$userLook -> summ = $summ; // выводим сумму
	$userLook -> approval = "true"; // Результат того что он посматрел и одобрил (Ввели его заказ в бд для организацыии продукцыии

if(!isset($userLook->tame) AND !isset($userLook->summ) AND !isset($userLook->approval)){ // если все поля заняты то содаём новый обьект
	$Status = new BayStatus; 
	$Status ->status = $status; // выесняем где он находиться, на почте, в пути или вообще потерян
	// Если заказ уже можно заберать с почты или пункта выдачи вводим "OK"
if($Status -> status == "OK"){
	$BayOkUser = new BayOk;
	$BayOkUser -> ok = $ok; // Пишем что поситетль забрал свой заказ и оплата прошла
	
}
}
}
/// Задание 5



/*
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo();
$a2->foo();
$a1->foo();
$a2->foo();
*/
// Перемееная как бы находиться по области ввидимсти во внешней среде,
// И при каждом вызове обьекта мы ее увеличиваему
echo "</br>";
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo(); //1
$b1->foo();  //1
$a1->foo();  //2
$b1->foo(); //2

//Видо изменение числа происходит тоько при вызове прототипа класса а
// в бе как таковых изменений нет
?>