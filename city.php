<?php
	//取得網址列的參數
	$name=$_REQUEST["name"];
	if($name=="taipei"){
		echo "300 Wan";
	}else if($name=="hsinchu"){
		echo "50Wan";
	}else{
		echo "no Data";
	}
/*
提供的服務
http://localhost:8080/city.php?name=城市名稱
例如
http://localhost:8080/city.php?name=taipei
http://localhost:8080/city.php?name=hsinchu

*/
?>