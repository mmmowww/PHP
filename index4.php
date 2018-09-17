<!doctype html>
<html>
<head>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<?php


$control = array();
$divs;
$travel = 'img';
$imgControl = scandir($travel);
$KolVo = count($imgControl);



echo $img;
$KolVo = $KolVo - 3;
echo $KolVo;

echo "------</br>";
echo "</br>";
echo "</br>";
$img = $KolVo;
echo  '<style type="text/css">
   img { 
    width: 150px;
        height: 100px;
   }
  </style>';
	for($i=0;$i<=$img;$i++){
	 echo '<img src = "img/';
     echo $i;
	 echo '.jpg">';
	 echo "</img>";
	  
	}	
$i++;
////////////////////////////
echo "</br>";


	
	
if($_FILES["filename"]["size"] > 1024*3*1024)
   {
     echo ("Размер файла превышает три мегабайта");
     exit;
   }
   
   if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
   {
     
     move_uploaded_file($_FILES["filename"]["tmp_name"], "img".$_FILES["filename"]["name"]);
   } else {
      echo("Ошибка загрузки файла");
   }
$put = "../localhost";
 $dir = scandir($put);
//var_dump($dir);
echo $filename = $dir[3];
$img++;
$NewFele = "img/{$img}.jpg";

rename($filename,$NewFele);
 
?>
 <form action="" method="post" enctype="multipart/form-data">
      <input type="file" name="filename"><br> 
      <input type="submit" value="Загрузить"><br>
      </form>
<script type="text/javascript">
//Для проверки можно удалить этот JS скрипт
$('img').hover(function(){
	console.log($('img'));
	$(this).height(200); 
	$(this).width(200); 
	             
	});

//console.log(body);
</script>


</body>
</html>