<?php
 session_start();


if(!isset($_SESSION["logged_in"])){
    header("location: index.php");
}
 include 'header.php';
include 'add_admin.php';
?>
                                    <div class="content">
                                                <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-lg-12  ">
                                                            <div class="card card-user">
                                                                <div class="image">
                                                                    <img src="assets/img/background.jpg" alt="..."/>
                                                                </div>
                                                                <div class="content">
                                                                    <div class="author">
                                                                    <img class="avatar border-white" src="assets/img/faces/face-2.jpg" alt="..."/>
                                                                    <h4 class="title"><?php echo $_SESSION['username'] ?><br />
                                                                    </h4>
                                                                    </div>
                                                                    <p class="description text-center">
                                                                        With great powers comes<br>
                                                                    great responsibility.
                                                                    </p>
                                                                </div>
                                                                <hr>
                                                            </div>
                                                            </div> 
                                                        </div> 

                                        <div class="card">
                                            <div class="header">
                                                <h4 class="title">Administrators</h4>
                                            </div>
                                            <div class="content">
                                            <div class="content table-responsive table-full-width">
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                        <th>ID</th>
                                                        <th>Username</th>
                                                        <th>Action</th>      
                                                    </tr>   
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $sql= "SELECT * FROM admin";
                                                        $query = mysqli_query($conn, $sql);
                                                        $userlist = mysqli_num_rows($query);
                                                        if($userlist >0) {
                                                            while($result=mysqli_fetch_assoc($query) ){
                                                                echo "
                                                            <tr>
                                                            <td>".$result['ID']."</td>
                                                            <td>".$result['Username']."</td>
                                                            <td><a href='delete.php?id=".$result['ID']."' class='btn btn-danger'>Delete</a></td>
                                                        </tr> "  ;
                                                            }
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            </div> 
                                        </div>

                              
                        
                                        <div class="content">
                                         <div class="col-lg-15  ">
                                             <div class="card">
                                               <div class="header">
                                                   <h4 class="title">New Account </h4><br>    
                                                   <form  class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off">
                                                  <div class="form-group ">
                                                  <div class="help-block"><?php echo  $_SESSION['status']; ?></div>   
                                                <label>Username</label>
                                                    <input type="text" id= "username" name="username" class="form-control" value="" required />
                                                </div>    
                                                <div class="form-group ">
                                                    <label>Password</label>
                                                    <input type="password" id="password" name="password" class="form-control" 
                                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,64}" title="Must contain at least one number and one uppercase and lowercase 
                                                    letter, and at least 8 or more characters"required /><br><br>
                                                </div>
                                                <div class="form-group">
                                                <input type="submit" class="btn btn-primary pull-left" value="Register" name="register"style=background-color:green;color:white>
                                                    <br><br>
                                                </div>
                                            </form>
                                        </div>
                                        <br><br><br>			  

                                        </div>
                  
                                  
    <style>
					input[type=text]:focus, input[type=password]:focus {
						background-color: #ddd;
						outline: none;
					}
	
					input[type=text], input[type=password] {
						width: 30%;
						padding: 10px;
						margin: 5px;
						display: inline-block;
						border: none;
						background: #f1f1f1;
					}

					
    </style>


    <?php include 'footer.php'; ?>