<?php
if(isset($_POST['submit'])){

$dbhost="localhost";
$dbusername="root";
$dbpassword="";
$dbname="rovers";



$con=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);


$name = $_POST['name'];
$email=$_POST['email'];
$tel_no=$_POST['tel_no'];
$car_ordered=$_POST['car_ordered'];


$sql="INSERT INTO process(name,email,tel_no,car_ordered)VALUES('$name','$email','$tel_no','$car_ordered')";


$rs = mysqli_query($con ,$sql);

if ($rs) {
    echo"ORDER SUCCESSFULLY";
  } 

  mysqli_close($con);

header ("location:billingaddress.php");
}
?>