<?php 
session_start();
		 if($_SESSION['signal']!="admin"){
			 header("location:login.html");
			 
		 }


?>
<?php

$busid=$_POST['busid'];
$source=$_POST['source'];
$destination=$_POST['destination'];
$driver=$_POST['driver'];
$supervizer=$_POST['supervizer'];
$phone=$_POST['phone'];
$jday=$_POST['jday'];
$price=$_POST['price'];
$flag=true;




$conn = mysqli_connect("localhost", "root", "", "record1");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['busid']) && isset($_POST['source']) && isset($_POST['destination']) 
	&& isset($_POST['driver']) && isset($_POST['supervizer']) && isset($_POST['supervizer']) && isset($_POST['jday']) && isset($_POST['price'])){
		
		
	$sql = "UPDATE businfo SET busid='$busid',source='$source',destination='$destination',driver='$driver',supervizer='$supervizer',phonenumber='$phone',jday='$jday',price='$price' WHERE busid=$busid";
	if (mysqli_query($conn, $sql)) {
		echo "New records inserted successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
else{
	echo "parameter(s) missing";
}
mysqli_close($conn);

?>