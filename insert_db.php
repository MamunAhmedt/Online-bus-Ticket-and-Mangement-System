<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$mail=$_POST['mail'];
$password=$_POST['pass'];
$birtday=$_POST['bday'];
// Create connection
$conn = mysqli_connect("localhost", "root", "", "record1");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['gender']) && isset($_POST['phone'])
	&& isset($_POST['mail']) && isset($_POST['pass'])){
	$sql = "INSERT INTO userinfo 
	VALUES ('$fname','$lname','$birtday','$gender','$phone','$mail','$password')";
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