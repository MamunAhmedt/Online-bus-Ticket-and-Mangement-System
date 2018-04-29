<?php 
session_start();
		 if($_SESSION['signal']!="admin"){
			 header("location:login.html");
			 
		 }


?>







<?php
$routeid=$_POST['routeid'];
$source=$_POST['source'];
$destination=$_POST['destination'];
$price=$_POST['price'];



$conn = mysqli_connect("localhost", "root", "", "record1");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['routeid']) ){
		
		
	$sql = "DELETE FROM route where routeid=".$routeid;
	if (mysqli_query($conn, $sql)) {
		echo " route deleted  successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
else{
	echo "parameter(s) missing";
}
mysqli_close($conn);

?>