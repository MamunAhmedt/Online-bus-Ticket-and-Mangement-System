<?php
require("a.php");
$name=$_POST['mail'];
$password=$_POST['pass'];
$flag=false;
$jsonData= getJSONFromDB("select * from userinfo");


$jsn=json_decode($jsonData,true);
for($i=0;$i<sizeof($jsn);$i++){
		 if($jsn[$i]['mail']==$name && $jsn[$i]['password']==$password){
		 $flag=true;
		 echo "welcome  ".$jsn[$i]['fname']."</br>";
	 }
	 }
	 
	 if(!$flag){
			echo "user not Found";
		}
//echo "<pre>";print_r($jsn);echo "</pre>";
//echo $jsonData;
?>