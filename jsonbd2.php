<?php
require_once("mysql-to-json.php");

if($_REQUEST["signal"]=="readCGPA"){

	echo getJSONFromDB("SELECT * FROM userinfo WHERE mail=".$_REQUEST["mail"]);
}
else{
	echo "Invalid request";
}
$str="";for($i=0;$i<100000;$i++){$str.="slowing down";}


?>