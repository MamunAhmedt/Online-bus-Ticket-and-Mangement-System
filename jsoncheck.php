<?php
require("jsonread.php");
$name=$_POST['mail'];
$password=$_POST['pass'];
$usertype=$_POST['user'];
$flag=false;
if($usertype=="user"){
$jsonData= getJSONFromDB("select * from userinfo");


$jsn=json_decode($jsonData,true);
for($i=0;$i<sizeof($jsn);$i++){
		 if($jsn[$i]['mail']==$name && $jsn[$i]['pass']==$password){
		 $flag=true;
		 session_start();
		 $_SESSION['signal']="user";
		 $_SESSION['UserName']=$jsn[$i]['fname'];
		 header("location:UserPanel.php");
	 }
	 }
}


if($usertype=="admin"){
$jsonData= getJSONFromDB("select * from admin");


$jsn=json_decode($jsonData,true);
for($i=0;$i<sizeof($jsn);$i++){
		 if($jsn[$i]['mail']==$name && $jsn[$i]['pass']==$password){
		 $flag=true;
		 session_start();
		 $_SESSION['signal']="admin";
		 $_SESSION['UserName']=$row['fname'];
		 header("location:AdminPanel.php");
	 }
	 }
}


	 if(!$flag){
			echo "user not Found";
		}
//echo "<pre>";print_r($jsn);echo "</pre>";
//echo $jsonData;
?>