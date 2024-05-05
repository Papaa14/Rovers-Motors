<?php
if(isset($_POST['submit'])){

$dbhost="localhost";
$dbusername="root";
$dbpassword="";
$dbname="rovers";



$con=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);


$name = $_POST['name'];
$email=$_POST['email'];
$Address=$_POST['Address'];
$TEL_NO=$_POST['TEL_NO'];
$CreditCard_number=$_POST['CreditCard_number'];
$Exp_Month=$_POST['Exp_Month'];

$sql="INSERT INTO billing(name,email,Address,TEL_NO,CreditCard_number,Exp_Month)VALUES('$name','$email','$Address','$TEL_NO','$CreditCard_number','$Exp_Month')";


$rs = mysqli_query($con ,$sql);

if ($rs) {
    echo"BILLING SUCCESSFULLY";
  } 

  mysqli_close($con);
header ("location:alert.php");
}
?>