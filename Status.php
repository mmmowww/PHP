<?
//namespace Mr\god\Status;
class Status {
	public $id;
	public $Name;
	public $Qv;
	public $price;
	public $Status;
	
	public function __construct(){
		$this->id;
		$this->Name;
		$this->Qv;
		$this->price;
	}
	public function GetStatus($StatusNumero){
		$StatusNumero = 1;
		$MyStatus = new PDO('mysql:host=localhost;dbname=Product', "root", "");
		$SqL = "SELECT info FROM `Status` WHERE id = ".$StatusNumero."";
		$res = $MyStatus->qvery($SqL);
		$res->setFetchMode(PDO::FETCH_ASSOC);
		$row = $res->fetch();
		var_dump($row);
		return $row;
}
}
?>