<?php require 'conn.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Register Page</title>

<link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
    
<!-- Registration Form -->
<div class="container">
        <form method="POST" action="">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col">
                                    <center>
                                        <img width="100" src="img/user.png" />
                                    </center>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <center>
                                        <h4>User Registration</h4>
                                    </center>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <hr>
                                </div>
                            </div>

                            <!-- input section of user regitration -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>UserName</label>
                                        <input type="text" name="username" class="form-control" 
                                            placeholder="Enter UserName">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter full Name">
                                    </div>
                                </div>
                            </div>
                            <!-- End input section of user regitration -->
                            <!-- input section of user regitration -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email"  placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="pass"  placeholder="Enter Password">
                                    </div>
                                </div>
                            </div>
                            <!-- End input section of user regitration -->
                            <center>
                                <button type="submit" class="btn btn-primary" name="u_register">Register</button>
                            </center>
        </form>
    </div>
    <!--End Of Registration Form -->


<!-- Bootstrap links -->
<link rel="stylesheet" href="js/jquery.min.js">
<link rel="stylesheet" href="js/bootstrap.min.js">


<?php 
        if(isset($_POST['u_register'])) {
            $username = $_POST['username'];
            $fname = $_POST['name'];
            $femail = $_POST['email'];
            $pass = $_POST['pass'] ;
            $sql = "INSERT INTO register (username,name,email,password)VALUES ('$username',' $fname',' $femail',$pass)";
            if(mysqli_query($conn, $sql)) {
                echo "<script>alert('New Record Created Successfully');</script>";

            } else{
                echo "Error".$sql."<br>".mysqli_error($conn);
            }
        }   
    
         
    ?>

</body>
</html>