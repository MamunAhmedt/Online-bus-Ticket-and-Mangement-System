<?php 
session_start();
		 if($_SESSION['signal']!="admin"){
			 header("location:login.html");
			 
		 }


?>
<?php
require_once("mysql-to-json.php");

if($_REQUEST["signal"]=="readCGPA"){

	echo getJSONFromDB("SELECT * FROM route where routeid=".$_REQUEST["routeid"]);
}
else{
	echo "Invalid request";
}
$str="";for($i=0;$i<100000;$i++){$str.="slowing down";}


?>