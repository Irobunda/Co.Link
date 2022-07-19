<?php
session_start();

require_once "db.php";
 
$username = $password = "";
$username_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $modifiedString = htmlentities($_POST["username"], ENT_QUOTES,'ISO-8859-1', true);
    if(empty(trim( $modifiedString ))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    if(empty($username_err) && empty($password_err)){
        $sql = "SELECT id, username, password FROM admin WHERE username = ?";
        if($stmt = mysqli_prepare($conn, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = $username;
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){						
                        if(password_verify($password, $hashed_password)){	
                            session_start();
                            $_SESSION["logged_in"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            header("location: dashboard.php");
                        } else{
                            $password_err = "The Username or password you entered was not valid.";
                        }
                    }
                } else{
                    $username_err = "Check your username or password.";
                }
            } else{
                echo 'Oops! Something went wrong. Please try again later.';
             
            }
        }
    }
} 

?>
