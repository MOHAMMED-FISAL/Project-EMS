<?php require 'conn.php';
session_start();
if(!$_SESSION['u_name']){
  header('Location:loginpage.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #e3f2fd;bg-light">
  <a class="navbar-brand" href="#">EMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" 
  aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
       
    </ul>

    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
     <li class="nav-item ">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>   
    </ul>
    
    
    
  </div>
</nav>

<!-- End of Navbar -->

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3">
           <div class=" panel panel-default">
               <div class="panel-heading">Employees</div>
               <ul class="list-group">
                   <li class="list-group-item"><a href="AddEmployee.php">Add New Employee</a></li>
                   <li class="list-group-item"><a href="homepage.php">view All Employee</a></li>
               </ul>
           </div>
        </div>
        <div class="col-lg-9 col-md-9">
           <div class=" panel panel-default">
               <div class="panel-heading">Employee List</div>
                <table class="table table-bordered  border-primary">
                    <thead class="table-dark">  
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>DETAILS</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>
                        <!-- php code here -->
                        <?php 
                                
                                    $sql = "SELECT *FROM register  ";
                                    $result = mysqli_query($conn ,$sql);
                                    if(mysqli_num_rows($result)>0) {
                                        while ($employee = mysqli_fetch_assoc($result)){?>
                                            
                                            <tr>
                                                <td><?php echo $employee['id']; ?></td>
                                                <td><?php echo $employee['name']; ?></td>
                                                <td><a href="details.php?id=<?php echo $employee['id']; ?>" class="btn btn-block btn-xs btn-info">Details</a></td>
                                                <td><a href="edit.php?id=<?php echo $employee['id']; ?>" class="btn btn-block btn-xs btn-warning">Edit</a></td>
                                                <td><a href="deletepage.php?id=<?php echo $employee['id']; ?>" class="btn btn-block btn-xs btn-danger">Delete</a></td>
                                            </tr>

                                       <?php }

                                    } else{
                                        echo 'invalid username';
                                    }
                                 

                            ?>
                    
                </table>
           </div>
        </div>
    </div>
</div>


<!-- Bootstrap links -->
<link rel="stylesheet" href="js/jquery.min.js">
<link rel="stylesheet" href="js/bootstrap.min.js">
</body>
</html>