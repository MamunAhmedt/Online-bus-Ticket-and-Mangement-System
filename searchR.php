<?php

$s_source= $_POST['source'];
$s_destination= $_POST['destination'];
$s_journeydate=$_POST['jday'];

require("a.php");

$jsonData= getJSONFromDB("select * from businfo");
$jsn=json_decode($jsonData,true);





?>
<head>
<style>
table,tr,td,th{
	
	margin:20px 500px;
	border:2px solid black;
}




 
</style>





</head>



<body style="background-color:pink">

<form>
<table >
<tr>
<th style="font-size:20px;color:green" >BusId</th>
<th style="font-size:20px;color:green" >Source</th>
<th style="font-size:20px;color:green">Destination</th>
<th style="font-size:20px;color:green">Price</th>
</tr>

<tr>

<td> <?php 
for($i=0;$i<sizeof($jsn);$i++){
		 if($jsn[$i]['source']==$s_source && $jsn[$i]['destination']==$s_destination && $jsn[$i]['jday']==$s_journeydate){
		 $flag=true;
		 echo $jsn[$i]['busid']."</br>";
	 }

	 }
	 if(!$flag){
		 echo "Nothing Found";
	 }
	 ?> </td>
<td> <?php 
for($i=0;$i<sizeof($jsn);$i++){
		 if($jsn[$i]['source']==$s_source && $jsn[$i]['destination']==$s_destination&& $jsn[$i]['jday']==$s_journeydate){
		 $flag=true;
		 echo $jsn[$i]['source']."</br>";
	 }
	 
	 
	 }
	 if(!$flag){
		 echo "Nothing Found";
	 }
	 ?> </td>
<td> <?php 
for($i=0;$i<sizeof($jsn);$i++){
		 if($jsn[$i]['source']==$s_source && $jsn[$i]['destination']==$s_destination&& $jsn[$i]['jday']==$s_journeydate){
		 $flag=true;
		 echo $jsn[$i]['destination']."</br>";
	 }
	 
	 
	 }
	 if(!$flag){
		 echo "Nothing Found";
	 }
	 ?> </td>
<td> <?php 
for($i=0;$i<sizeof($jsn);$i++){
		 if($jsn[$i]['source']==$s_source && $jsn[$i]['destination']==$s_destination&& $jsn[$i]['jday']==$s_journeydate){
		 $flag=true;
		 echo $jsn[$i]['price']."</br>";
	 }
	 
	 
	 }
	 if(!$flag){
		 echo "Nothing Found";
	 }
	 ?> </td>


</tr>
<td>



</table>





</form>