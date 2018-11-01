<?php
class Repository {  // В репрозиторий я скинул всю "Сложную" миханику вывода продуктов, разве так я не должен был поступить? 

public function MySqlQvery(){   // Обработчик запросов и репрозиторий (Хотел обьединить дз)
		$SqL = "SELECT COUNT(*) as count FROM `Product`";
		$MySqlRender = new PDO('mysql:host=localhost;dbname=Product', "root", "");
		$res = $MySqlRender->query($SqL);
		try{        // Проверка на обьект ответа PSD
			if($res != $MySqlRender){ // Как проверить обьект ПСД на обьект ПСД я не нашёл ответа  
			// Как проверить обьект на обьект да, но обьект псд на обьект псд я не нашёл
			throw new Exception('Sory Eror 404!'); //Если он небыл найден то вывод 404 ошибки
		}
		}catch(Exception $e){
			echo $e->getMessage();
		}
		$res->setFetchMode(PDO::FETCH_ASSOC);
		$row = $res->fetch();
		$Stolb = $row['count']; // Вяснил сколько запсей в тоблице
		for($i = 1;$i<=$Stolb;$i++){   // Решил вывести через for а не через while
			$dbh = new PDO('mysql:host=localhost;dbname=Product', "root", ""); 
            $stmt = $dbh->prepare("SELECT * FROM `Product`"); 
            $stmt->execute(); 
           $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
		   $I = $i;
		   $I--;
			var_dump($row[$I]);
			$this->Id = $row[$I]["id"] ;
			$this->Name = $row[$I]["Name"];
			$id = $this->Id;
			$Name = $this->Name;
 echo ' <form action="index.php"  method="GET"></br>  ';  // Рендер обработчика запросов
 echo ' <h3>'.$this->Name.'</h3></br>  ';
 echo ' <input type = "hidden" name = "id" value="'.$this->id.'">'.$this->id.'</input> </br>  ';
 echo ' <input type = "hidden" name = "MyNames" value="'.$this->Name.'">'.$this->Name.'</input> </br>  ';
 echo ' <input type ="submit" value = "Купить????"></br>  ';
 echo ' </form></br>';
		}		
	}
	public function GetNameProduct(){
		$ProductName = new PDO('mysql:host=localhost;dbname=Product', "root", "");
		$SqL = "SELECT Name FROM `Product`";
		$MysqlNameAnswer = $ProductName->query($SqL);
		$MysqlNameAnswer->execute();
		$row = $MysqlNameAnswer->fetchAll(PDO::FETCH_ASSOC);
		//var_dump($row);
		echo $row[$NUM]['Name']; // Вывод из базы оприделеного товара по имени имя задоёться переменной $NUM
		
		
	}
	
	
	
}





?>