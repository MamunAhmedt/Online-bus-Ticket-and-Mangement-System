<?php
$name=$_POST['mail'];
$password=$_POST['pass'];
$usertype=$_POST['user'];
$flag=false;
echo $name;
$conn = mysqli_connect("localhost", "root", "","record1");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if($usertype=="user"){
$sql = "SELECT * FROM userinfo";
$result = mysqli_query($conn, $sql)or die(mysqli_error());

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
     if($row['mail']==$name && $row['pass']==$password){
		 $flag=true;
		 session_start();
		 echo "welcome  ".$row['fname']."</br>"; 
		$_SESSION['UserName']=$row['fname'];
		 header("location:UserPanel.php");
		 
		 
		
	 }
	}
}
	 
			
		
		
		if(!$flag){
			echo "user not Found";
		}
}
if($usertype=="admin"){
$sql = "SELECT * FROM admin";
$result = mysqli_query($conn, $sql)or die(mysqli_error());

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
     if($row['mail']==$name && $row['pass']==$password){
		 $flag=true;
		 session_start();
		 echo "welcome  ".$row['fname']."</br>"; 
		$_SESSION['UserName']=$row['fname'];
		 header("location:AdminPanel.html");
		 
		 
		
	 }
	}
}
	 
			
		
		
		if(!$flag){
			echo "user not Found";
		}
}




mysqli_close($conn);
?>