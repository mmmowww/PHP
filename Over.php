<?php
//namespace Mr\god\Over;
class Over {
	public $idSold; // айди готового заказа
	public $info; /// информацыя по заказу
	public $deliver = FALSE;// Пока заказ не доставлен он лож, как только заказ получен он тру
public function __construct (){
	$this->idSold;
	$this->info;
	$this->deliver;
}
public function Answer($Num){
	$MyOver = new PDO('mysql:host=localhost;dbname=over', "root", "");
	$SqL = "SELECT info FROM `over` WHERE id = ".$Num."";
	$res = $MyOver->qvery($SqL);
	$res->setFetchMode(PDO::FETCH_ASSOC);
	$row = $res->fetch();
	$this->info = $row;
	//////////////////
	$GoodSool = new PDO('mysql:host=localhost;dbname=over', "root", "");
	$SQL = "SELECT deliver FROM `over` WHERE id = ".$Num."";
	$ResDeliver = $GoodSool->qvery($SQL);
	$ResDeliver->setFetchMode(PDO::FETCH_ASSOC);
	$ResRow = $ResDeliver->fetch();
	$this->deliver = $ResRow;
	if($this->deliver == "TRUE"){
		echo "Спасибо за покупку ваш заказ доставлен!";
	}
	var_dump($row);
}	
}

?>