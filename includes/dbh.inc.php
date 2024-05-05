<?php
$dbServername="localhost";
$dbUsername="root";
$dbpassword="";
$dbname="rovers";

$con=mysqli_connect($dbServername,$dbUsername,$dbpassword,$dbname);
if(!$con){
  echo "Could not connect to database";
}

  ?>
