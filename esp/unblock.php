<?php 


include 'connection.php';

$Id = $_GET['Id'];

$query =mysqli_query($conn,"UPDATE agent set status='allowed' where Id='$Id' ");

if ($query==true) {
echo "<script>alert('Un Blocked')</script>";
include 'status.php';
}
else{
echo "<script>alert('Not UnBlocked')</script>";
include 'status.php';


}

 ?>