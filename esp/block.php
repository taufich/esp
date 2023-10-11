<?php 


include 'connection.php';

$Id = $_GET['Id'];

$query =mysqli_query($conn,"UPDATE agent set status='blocked' where Id='$Id' ");

if ($query==true) {
echo "<script>alert('Blocked')</script>";
include 'status.php';
}
else{
echo "<script>alert('Not Blocked')</script>";
include 'status.php';


}

 ?>