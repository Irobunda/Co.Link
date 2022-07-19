<?php
include 'db.php';?>

<?php
if(isset($_GET['id'])){
$id= $_GET ['id'];
$sql= "DELETE FROM `test_driverdb` WHERE `id`='$id'";
$query=mysqli_query($conn, $sql);
header("location:table.php");
die();

}
  ?>