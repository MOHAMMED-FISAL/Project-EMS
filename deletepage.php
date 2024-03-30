<?php

require 'conn.php';
$id =$_GET['id'];
$sql = "DELETE FROM register WHERE id='$id'";

if(mysqli_query($conn, $sql)) {
    echo "<script>alert(' Record Deleted Successfully');</script>";
    header('Location:homepage.php');

} else{
    echo "Error Deleting Record".$sql."<br>".mysqli_error($conn);
}
   

?>