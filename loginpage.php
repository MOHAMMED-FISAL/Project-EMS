<?php require 'conn.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMS Login Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
   
<div class="container">
<form method="POST" action="">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col">
                            <center>
                                <img width="150" src="img/user.png" />
                             </center>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col">
                           <center>
                                <h3>Member Login</h3>
                           </center>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                           <hr>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">

                          <div class="form-group">
                              <label>Username</label>
                              <input type="text" name="username" class="form-control" 
                                            placeholder="Enter UserName">
                          </div>

                           <div class="form-group">
                              <label>Password</label>
                              <input type="password" class="form-control" name="pass" 
                               placeholder="Enter Password">
                           </div>

                           

                            <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" name="u_login" >login</button>
                           </div>

                        </div>
                    </div>

                </div>
            </div>
            <a href="index.php"><< Back to Home</a><br /><br />
        </div>
    </div>
    </form>
</div>


<!-- Bootstrap links -->
<link rel="stylesheet" href="js/jquery.min.js">
<link rel="stylesheet" href="js/bootstrap.min.js">



<?php 
        if(isset($_POST['u_login'])) {
            
            $uname = $_POST['username'];
            $upass = $_POST['pass'];
            $sql = "SELECT *FROM register WHERE username ='$uname'";
            $result = mysqli_query($conn ,$sql);
            if(mysqli_num_rows($result)>0) {
                while ($user = mysqli_fetch_assoc($result)){
                    if($uname == $user['username'] && $upass ==$user['password']){
                        $_SESSION['u_name'] =$uname;
                       header('Location:homepage.php');
                    }else{
                        echo "<script>alert('wrong password or username');</script>";
                    }

                }

            } else{
                echo 'invalid username';
            }
        }  

    ?>

</body>
</html>