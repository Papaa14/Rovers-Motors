<?php
if(isset($_POST['submit'])){
$dbhost="localhost";
$dbusername="root";
$dbpassword="";
$dbname="rovers";



$con=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);

$username=$_POST['email'];
$password=$_POST['password'];


$sql="SELECT email,password FROM admin";

$rs = mysqli_query($con ,$sql);

if ($rs) {
    echo"LOGIN SUCCESSFULLY";
  } 

  mysqli_close($con);
header ("location:dashboard.php");
}
?>
