<?php
require_once 'Control.php'; // Таблица контроля магазина
class Bay {
	public $id;
	public $Name;

public function __construct(){
	$this->id;
	$this->Name;
}
public function Bay(){   // Покупка товара
	///Rendor::Rend();
	$R = new Rendor;
	$R->Rend();
	$shop = $_GET['SHOPOK'];
	$ifShop = "SHOPOK";
	$_GET['id'];
	$_GET['Name'];
	if($_GET != NULL){
	$this->id =	$_GET['id'];
	$this->Name = $_GET['NAME'];
	$My = new Tresh;
	$My->GetMyTresh($this->id,$this>Name);
}

if($shop == $ifShop){ // Скидывание отчёта в первый класс
	//	Shop->ShopS = TRUE;
	//	Shop->Rendor = TRUE;
}}

public function MayTresh(){ // Рендор карзины
		//Shop::Tresh  -> TRUE;
		//Shop::Tresh  -> TRUE;
		if($_GET['MayTresh'] == 'MayTresh'){
		$Tresh->RenderMyTresh();
		}
		$T = new Tresh;
		if($_GET['OK'])$T->OrderOk();  // Одобрить
		if($_GET['DEL'])$T->OrderNotOk(); // Удалить
	}
	public function Status($NumeroStatus){
		    $S = new Status;
		     $S->GetStatus($NumeroStatus);
			//$Shop->Status = TRUE;
	}
	public function Over(){
		//$Shop->Status = FALSE;
		//$Shop->Over = TRUE;
		$O = new Over;
		$O->Answer($NumeroStatus);
	} 
		
	public function vizar(){  // Карточка товара
		$info = $_GET['MoreInfo'];
		$infokey = "MoreInfo";
		if($info == $infokey){
		  $id   = $_GET['id'];
		  $Name = $_GET['Name'];
		  $MyVizar = new PDO('mysql:host=localhost;dbname=Product', "root", "");
		  $sql = "SELECT * FROM `Product` WHERE `id` = ".$id."";
		  $Vizar = $MyVizar->prepare($sql);
		  $Vizar->execute();
		  $row  =  $Vizar->fetchAll(PDO::FETCH_ASSOC);
	      var_dump($row);
		  $id = $row[0]['id'];
		  $Nm = $row[0]['Name'];
		  $in = $row[0]['info'];
		  $pr = $row[0]['price'];
		  $qv = $row[0]['qventy'];
		  echo "</br>";
		  echo $Nm;
		  echo "</br>";
		  echo "Информацыя о товаре";
		  echo "</br>";
		  echo $in;
		  echo "</br>";
		  echo "Цена";
		  echo "</br>";
		  echo $pr;
		  echo "</br>";
		  echo "Количество";
		  echo "</br>";
		  echo $qv;
		 	}
	}
	}
	
	


?>