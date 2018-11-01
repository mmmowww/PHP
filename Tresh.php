<?
//namespace Mr\god\Tresh;
class Tresh {
	public $id;
	public $Name;
	public static $Qv = 0;
	public function __construct(){
	$this->id;
	$this->Name;
	}
	public function GetMyTresh($id,$Name){ // Добовляем что либо в карзину м бд
		$this->id = $id;
		$this->Name = $Name;
		$GetSql = "INSERT INTO `Tresh` (`id`, `Name`, `qv`) VALUES ('".$this-id."', '".$this->Name."', '1');";
		$MyGet = new PDO ('mysql:host=localhost;dbname=Tresh', "root", "");
		$MyGet->prepare($GetSql);
	}
	public function RenderMyTresh(){
		$MyRender = new PDO ('mysql:host=localhost;dbname=Tresh', "root", "");
		$RendSql = "SELECT * FROM `Tresh`";
		$Columns = "SELECT COUNT(*) as count FROM `Tresh`";
		///////
		 $res = $MyRender->qvery($Columns);
		 $res->setFetchMode(PDO::FETCH_ASSOC);
		 $row = $res->fetch();
		 $StolbCov = $row['count'];
		///////
		if($StolbCov > 0){ // Еслм корзина вообще заполнена то рендорим её
		$MyRender->prepare($RendSql);
		$MyRender->execute(); 
        $row = $MyRender->fetchAll(PDO::FETCH_ASSOC);
		for($i=1;$i<=$StolbCov;$i++){
		echo "</br>";  // Форма вывода
		echo "-------";
		echo "</br>";
		$row[$i]['id'];
		$row[$i]['Name'];
		$row[$i]['Qv'];
		$Qv++;
	    echo "</br>";
	    echo "------";
		echo "</br>";
		}
		echo '<form method = "get">';
		echo '<input type = "hidden" value = "OK"> OK'; // Если заказ верен то отправляем его в другую бд для реализацыии
		echo "Одобрить заказ";
		echo "</form>";
		echo "</br>";
		echo "---------";
		echo "</br>";
		echo '<form method = "get">';
		echo '<input type = "hidden" value = ""> DEL'; // Если передумали то очщаем бд
		echo "Удалить заказ";
		echo "</form>";
		}
		}
		public function OrderOk(){   // Одобрили, то вывносим список покупок в другую бд
		$order = $_GET['OK'];
		if($order = "OK"){
		      $Sold = new PDO('mysql:host=localhost;dbname=Sold', "root", ""); // Готовим чек лист
			  $Sql = "INSERT INTO `Sold` (`id`, `Name`, `price`, `qventy`, `info`) VALUES ('".$this-id."', '".$this-Name."', '".ShopS::$price."', '".ShopS::$Qv."', '".ShopS::$info."');";
			  $Sold->prepare($SqL);
			  ////////////
			  
		}
		}
		public function OrderNotOk(){
		$order = $_GET['DEL'];	
		if($order = "DEL"){
			$Del = new PDO('mysql:host=localhost;dbname=Tresh', "root", "");
			$SqlDel = "DELETE FROM `Sold`";
			$Del->prepare($SqlDel);
		}
		}
		
	
}
?>