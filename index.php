<?php
?>
<head>
</head>
<body>
<?php
try{
$userMySql = 'root';
$passMySql = '';
$MyPdo = new PDO('mysql:host=localhost;dbname=TEST', $userMySql, $passMySql);
}catch(PDOExeception $error){
	echo "NAIN!";
	echo $error->getMessage();
	exit;
}

$sql = "SELECT * FROM `TEST`";
$answerMySql  = $MyPdo->query($sql); 
var_dump($answerMySql); 
echo "</br>";






while($row = $answerMySql->fetch()){

print_r($row);
echo "</br>";
}

class Singelton {
public function __construct() {
	global $DB;	
	$this->$DB = $DB;
	}
public function MySqli(){
$user = 'root';
$pass = '';
$MyPdo = new PDO('mysql:host=localhost;dbname=TEST', $user, $pass);
$result = $MyPdo->query($sql);
return $result->fetchAll(PDO::FETCH_ASSOC);	
}
}

class Product {
	public $name;
	public $TwoName;
	public function __construct(){
		$this->name = $name;
		$this->TwoName = $TwoName;
	}
	public function insert(){
		echo "Peredal";
		$naimus = $this->name;
		$TwoNaimus = $this->TwoName;
		$insertPDO = new PDO('mysql:host=localhost;dbname=TEST', "root", "");
	    $sql = "INSERT INTO `TEST` (`id`, `Name`) VALUES (NULL, '".$naimus."')";
	}
	public function del(){
		  
		  $delPdo = new PDO('mysql:host=localhost;dbname=TEST', "root", "");
		  $sqlEcho = "SELECT * FROM `TEST` WHERE `Name` LIKE '".$this->name."'";
		 $sql = "DELETE FROM `TEST` WHERE `TEST`.`name` = ".$this-name."";
		  
		  $delPdo->query($sql);
		  
		 
	}
	public function __destruct(){
		echo "<dev>";
		echo "DEL";
		echo "</dev>";
		
	}
}


$PRodyct = new Product;
$PRodyct->name = "NAME";
$PRodyct->TwoName = "ANAME";


?>
</body>