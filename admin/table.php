<?php

session_start();
if(!isset($_SESSION["logged_in"])){
    header("location: index.php");
 }
      include 'header.php';
      include 'db.php';
?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Registered Users</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Username</th>
                                    	<th>Email</th>
                                    	<th>Address</th>
                                        <th>Dateofbirth</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql= "SELECT * FROM test_driverdb";
                                        $query = mysqli_query($conn, $sql);
                                        $userlist = mysqli_num_rows($query);
                                                if($userlist >0) {
                                                    while($result=mysqli_fetch_assoc($query) ){
                                                        echo "
                                        <tr>
                                        	<td>".$result['id']."</td>
                                            <td>".$result['name']."</td>
                                            <td>".$result['username']."</td>
                                            <td>".$result['email']."</td>
                                            <td>".$result['address']."</td>
                                            <td>".$result['dob']."</td>
                                            <td><a href='deleteusers.php?id=".$result['id']."' class='btn btn-danger' >Delete</button></td>

                                        </tr> "
                                        ;
                                            }

                                        }
                                        else
                                        {
                                            ?>
                                            <tr>
                                                <td colspan="7">No Record Found</td>
                                            </tr>
                                        <?php
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Reservation</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Email</th>
                                    	<th>Phone</th>
                                    	<th>Number of Seat</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Date</th>
                                        <th>Action</th>

                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql= "SELECT * FROM booking";
                                        $query = mysqli_query($conn, $sql);
                                        $userlist = mysqli_num_rows($query);
                                                if($userlist >0) {
                                                    while($result=mysqli_fetch_assoc($query) ){
                                                        echo "
                                        <tr>
                                        	<td>".$result['id']."</td>
                                            <td>".$result['name']."</td>
                                            <td>".$result['email']."</td>
                                            <td>".$result['phone']."</td>
                                            <td>".$result['seat']."</td>
                                            <td>".$result['from']."</td>
                                            <td>".$result['to']."</td>
                                            <td>".$result['date']."</td>
                                            <td><a href='deletebooking.php?id=".$result['id']."' class='btn btn-danger' >Delete</button></td>

                                        </tr> "
                                        ;
                                            }

                                        }
                                        else
                                        {
                                            ?>
                                            <tr>
                                                <td colspan="10">No Record Found</td>
                                            </tr>
                                        <?php
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>







</body>
<?php include 'footer.php';?>
<?php include 'script.php';?>



