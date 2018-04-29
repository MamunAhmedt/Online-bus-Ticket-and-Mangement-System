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
$jday=$_POST['jday'];
$price=$_POST['price'];

$flag=true;


require("a.php");

$jsonData= getJSONFromDB("select * from businfo");


$jsn=json_decode($jsonData,true);
for($i=0;$i<sizeof($jsn);$i++){
		 
		

	 if($jsn[$i]['busid']==$busid ){
		 $flag=false;
	 }
}
if ($flag==true){

$conn = mysqli_connect("localhost", "root", "", "record1");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(!empty($_POST['busid']) && !empty($_POST['source']) && !empty($_POST['destination']) && !empty($_POST['regno'])
	&& !empty($_POST['driver']) && !empty($_POST['supervizer']) && !empty($_POST['supervizer']) && !empty($_POST['routeid']) && !empty($_POST['jday']) && !empty($_POST['price'])){
		
		
	$sql = "INSERT INTO businfo 
	VALUES ('$routeid','$busid','$source','$destination','$regno','$driver','$supervizer','$phone','$jday','$price')";
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
}
else{
	echo "either bus id or regestation number already in the database";
	
	
}
?>