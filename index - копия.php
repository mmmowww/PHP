<?php
//header("Content-type: image/gif");
//readfile("image.jpg");
?>
<!doctype html>
<html>
<head>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<?php

$sql = "CREATE TABLE `IMG`.`img` ( `id` INT NOT NULL AUTO_INCREMENT , `img` LONGBLOB NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;" ;
$SQL ="SELECT * FROM `img`";
$LINK = mysqli_connect("localhost", "root","","IMG");
$comand = mysqli_query($LINK,$SQL);

/////////////////////////////////



if($_SERVER['REQUEST_METHOD'] == 'POST'){	
	

if(isset($_FILES['file'])){
	if(!file_exists(UPLOADS_DIR)){
		mkdir(UPLOADS_DIR);
	}
	$filename = "UPLOADS_DIR";
	$F = $FILES['file']['tmp_name'];
	$F .= $filename;
	$filename = $F;
	$fileName = 'img/';
	$dir = $_FILES['file']['tmp_name'];
	
	echo $dir;
	$MYComand = "INSERT INTO `img` (`id`, `img`) VALUES (NULL,".$dir.")";
	echo $MYComand;
	
	mysqli_query($LINK,$MYComand);
	move_uploaded_file($filename,$fileName);
	mysqli_query($LINK,"SELECT * FROM `img`");
	
}
}
















// php 5.5
// ap 2.4
mysqli_close($LINK);

?>
 <form enctype="multipart/form-data" method="post" action="">
<input type="file" name ="file">
<input type="submit" name="Download" />
<script type="text/javascript">
//Для проверки можно удалить этот JS скрипт
//$('img').hover(function(){
//	console.log($('img'));
//	$(this).height(200); 
//	$(this).width(200); 
	             
//	});

//console.log(body);
</script>


</body>
</html>