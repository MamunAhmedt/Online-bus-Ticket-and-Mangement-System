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
$regno=$_POST['regno'];
$driver=$_POST['driver'];
$supervizer=$_POST['supervizer'];
$phone=$_POST['phone'];
$routeid=$_POST['routeid'];

$conn = mysqli_connect("localhost", "root", "", "record1");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['busid']) ){
	$sql = "DELETE FROM businfo where busid=".$busid;
	if (mysqli_query($conn, $sql)) {
		echo "New records deleted successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
else{
	echo "parameter(s) missing";
}
mysqli_close($conn);

?>