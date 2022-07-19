<?php
 $_SESSION['status'] = " ";
include 'db.php';




if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $modifiedusername = htmlentities($_POST['username'], ENT_QUOTES,'ISO-8859-1', true);
    $username = mysqli_real_escape_string($conn, $modifiedusername);
    $password = mysqli_real_escape_string($conn, password_hash($_POST['password'], PASSWORD_BCRYPT));

    $sql = "SELECT ID FROM `admin` WHERE `username` = '$username'";
    $query = mysqli_query($conn, $sql);
    $username_check = mysqli_num_rows($query);
    if($username_check >0) {
        $_SESSION['status']= 'This username exists' ;

    }
    else{
      $sql="INSERT INTO `admin`(`Username`, `Password`) VALUES ('$username','$password')";
      if ($conn->query($sql) === true) {
        $_SESSION['status'] = "Registration Successful! ";
        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $username; 
        header("location: user.php");

        }
        else {
            $_SESSION['status'] = "User could not be added to the databse";
            header("location: user.php");

        }      
    }
}

?>

