<?

class Rendor {
public $id;
public $name;

public function __construct(){
	$this-Id;
	$this-Name;
}
public function Rend(){
	$MyRend = new PDO('mysql:host=localhost;dbname=Product', "root", "");
	//////////////
	$SqL = "SELECT COUNT(*) as count FROM `Product`";
	$MySqlRender = new PDO('mysql:host=localhost;dbname=Product', "root", "");
	$res = $MySqlRender->query($SqL);
	$res->setFetchMode(PDO::FETCH_ASSOC);
	$row = $res->fetch();
	$Stolb = $row['count']; // Вяснил сколько запсей в тоблице
	for($i = 1;$i<=$Stolb;$i++){   // Решил вывести через for а не через while
			echo "</br>++</br>";
			$dbh = new PDO('mysql:host=localhost;dbname=Product', "root", ""); 
            $stmt = $dbh->prepare("SELECT * FROM `Product`"); 
            $stmt->execute(); 
           $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
		    $I = $i;
		    $I--;
			//var_dump($row[$I]);
			$this->Id = $row[$I]["id"] ;
			$this->Name = $row[$I]["Name"];
			$id = $this->id;
			$Name = $this->Name;
			
						
 echo ' <form action="index.php"  method="GET"></br>  ';  // Рендер обработчика запросов
 echo ' <h3>'.$this->Name.'</h3></br>  ';
 echo ' <input type = "hidden" name = "id" value="'.$this->id.'">'.$this->id.'</input> </br>  ';
 echo ' <input type = "hidden" name = "MyNames" value="'.$this->Name.'">'.$this->Name.'</input> </br>  ';
 echo ' <input type ="submit" value = "Купить????"></br>  ';
 echo ' <input type ="submit" value = "MoreInfo"></br>  ';
 echo ' </form></br>';
		}
		

	//////////////
	$SQL = "SELECT * FROM `Product`";
	$MyBD = $MyRend->prepare($SQL);
	$MyBD->execute();
	$rend = $MyBD->fetchAll(PDO::FETCH_ASSOC);
}	
	
	
	
	
}



?>