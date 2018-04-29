<?php 
session_start();
		 if($_SESSION['signal']!="user"){
			 header("location:login.html");
			 
		 }
?>


<?php

$busid=$_POST['busid'];
$seat=$_POST['seatnumber'];
$jday=$_POST['jday'];
$username=$_SESSION['UserName'];
$ticketnumber=rand();
$flag=false;







require_once("mysql-to-json.php");

$jsonData=getJSONFromDB("SELECT * FROM businfo WHERE busid=".$busid);
$jsn=json_decode($jsonData,true);
for($i=0;$i<sizeof($jsn);$i++){
		if($busid==$jsn[$i]['busid']){
			$flag=true;
		}
		
		  
	 }


if(empty($seat)){
	
	echo "NO Seat  Selected"."<br>";
	
}
if(empty($jday)){
	
	echo "NO journey date selected"."<br>";
	
}

if($flag==true){

$conn = mysqli_connect("localhost", "root", "", "record1");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['busid']) && isset($_POST['seatnumber']) && isset($_POST['jday'])){
	$sql = "INSERT INTO ticket 
	VALUES ('$busid','$seat','$jday','$username','$ticketnumber')";
	if (mysqli_query($conn, $sql)) {
		echo "Congratulation Ticket Successfully Purchased And your ticket Id Is :".$ticketnumber."<br>";
		echo "Use This Ticket Id to Print Your Ticket";
		

		
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
else{
	echo "parameter(s) missing";
}
mysqli_close($conn);
}

else{
echo "Bus With ID :".$busid."  "." Not Found";
}
?>