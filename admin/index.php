<?php include 'login.php';?>
<?php include 'header.php';?>

<br>  <br>  <br>  <br>  <br><br>  <br> 
<body>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">            
		<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">      
		<h2>Login</h2><br>
        <p>Please fill in your credentials to login.</p>  
        <div class="help-block"><?php echo $username_err; ?></div>   
        <div class="help-block"><?php echo $password_err; ?></div>
			   <label>Username</label>
                <input type="tet" name="username" class="form-control" value="<?php echo $username; ?>">
             
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">

            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
				<br><br>

            </div>
        </form>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>  <br>
    <br>
    <br>
    <br>
    <br>
    <br>  <br>
    <br>
    <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  
<?php include 'footer.php';?>
