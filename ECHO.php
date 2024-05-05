<?php


$dbhost="localhost";
$dbusername="root";
$dbpassword="";
$dbname="rovers";



$con=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);



$sql="SELECT name,email,tel_no,car_ordered FROM process";

$result=mysqli_query($con,$sql);
// Gets the Numeric array
$row=mysqli_fetch_array($result,MYSQLI_NUM);
echo " ROVERS MOTORS" ."<br>";
echo " FULL NAMES :".$row[0] ."<br>";
echo " EMAIL : ".$row[1] ."<br>";
echo " TELEPHONE NO : ".$row[2] ."<br>";
echo " CAR ORDERED: ".$row[3] ."<br>";



  mysqli_close($con);


?>