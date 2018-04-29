<?php 
session_start();
		 if($_SESSION['signal']!="user"){
			 header("location:login.html");
			 
		 }
?>


<?php
$busid="";
$source="";
$destination="";
$regno="";
$driver="";
$supervizer="";
$phone="";
$jday="";
$price="";
$username=$_SESSION['UserName'];
$ticketid=$_REQUEST["ticketnumber"];

require_once("mysql-to-json.php");

$jsonData=getJSONFromDB("SELECT * FROM ticket WHERE ticketnumber=".$_REQUEST["ticketnumber"]);
$jsn=json_decode($jsonData,true);
for($i=0;$i<sizeof($jsn);$i++){
		 $busid=$jsn[$i]['busid'];
		  
	 }
$jsonData1=getJSONFromDB("SELECT * FROM businfo WHERE busid=".$busid);
	 $jsn1=json_decode($jsonData1,true);
	 for($i=0;$i<sizeof($jsn1);$i++){
		 $source=$jsn1[$i]['source'];
		 $destination=$jsn1[$i]['destination'];
		 $regno=$jsn1[$i]['regno'];
		 $driver=$jsn1[$i]['driver'];
		 $supervizer=$jsn1[$i]['supervizer'];
		 $phone=$jsn1[$i]['phonenumber'];
		 $jday=$jsn1[$i]['jday'];
		 $price=$jsn1[$i]['price'];
		  
	 }
	 /*echo "Customer Name : ".$_SESSION['UserName']."<br>";
	  echo "Departer station: ". $source."<br>";
	  echo "Arrival station: ". $destination."<br>";
	   echo "Bus Registation no :". $regno."<br>";
	    echo "Driver name: ". $driver."<br>";
		 echo "Supervizer name: ". $supervizer."<br>";
		  echo "phone Number: ". $phone."<br>";
		   echo "Date Of Journey: ". $jday."<br>";
		    echo "ticket price: ". $price." BDT "."<br>";
			*/
			
			$userdetail=fopen($ticketid.'.txt','wb');
			fwrite($userdetail,"Customer name: ".$username.PHP_EOL);
			fwrite($userdetail,"Departer station: ".$source.PHP_EOL);
			fwrite($userdetail,"Arrival  station: ".$destination.PHP_EOL);
			fwrite($userdetail,"Bus Reg no: ".$regno.PHP_EOL);
			fwrite($userdetail,"Driver Name: ".$driver.PHP_EOL);
			fwrite($userdetail,"Supervizer Name: ".$supervizer.PHP_EOL);
			fwrite($userdetail,"Phone Number: ".$phone.PHP_EOL);
			fwrite($userdetail,"Date of journey: ".$jday.PHP_EOL);
			fwrite($userdetail,"Ticket price: ".$price.PHP_EOL);
			
	  echo "Thank you Sir-  ";
	 

$str="";for($i=0;$i<100000;$i++){$str.="slowing down";}

?>
<a href=<?php echo $ticketid.'.txt' ?> download > click- </a>
<?php
 echo "Herer To Download yout Ticket ";
?>

