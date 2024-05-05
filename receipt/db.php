
<?php 
  include("db.php");

   $sql = "SELECT * FROM car_details WHERE id='".$_POST['id']."'";
   $result = mysqli_query($con,$sql);
   while($row = mysqli_fetch_assoc($result))
   {
         $data = $row;
   }
    echo json_encode($data);
 ?>