<?php
include 'db.php';
 $_SESSION['message'] = " ";
?>
<?php

if(isset($_GET['id'])){
$id= $_GET ['id'];
$sql= "DELETE FROM `admin` WHERE `ID` ='$id'";
$query=mysqli_query($conn, $sql);
$_SESSION ['message']="User Deleted";
header("location: user.php");
die();

}
  ?>
