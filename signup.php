<?php
if(isset($_POST['submit'])){

$dbhost="localhost";
$dbusername="root";
$dbpassword="";
$dbname="rovers";



$con=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);


$name = $_POST['name'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];


$sql="INSERT INTO users(name,email,username,password)VALUES('$name','$email','$username','$password')";


$rs = mysqli_query($con ,$sql);

if ($rs) {
    echo"REGISTRATION SUCCESSFULLY";
  } 

  mysqli_close($con);
header ("location:pages-login.PHP");
}
?>