
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


$flag=true;


require("a.php");

$jsonData= getJSONFromDB("select * from route");


$jsn=json_decode($jsonData,true);
for($i=0;$i<sizeof($jsn);$i++){
		 if($jsn[$i]['routeid']==$routeid){
			 $flag=false;
		
	 }
	 }

if ($flag==true){

$conn = mysqli_connect("localhost", "root", "", "record1");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['routeid']) && isset($_POST['source']) && isset($_POST['destination'])  && isset($_POST['price'])  ){
		
		
	$sql = "INSERT INTO route 
	VALUES ('$routeid','$source','$destination','$price')";
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