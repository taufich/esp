<?php 


include 'connection.php';

$Id = $_POST['Id'];
$Names = $_POST['Names'];
$Gender = $_POST['Gender'];
$Location = $_POST['Location'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];

$query = mysqli_query($conn,"UPDATE agent SET Names='$Names',Gender='$Gender',Location='$Location',Username='$Username',Password='$Password' where Id='$Id'");

if ($query==true) {
	echo "<script>alert('Data Updated')</script>";
	include 'viewagent.php';
}
else{
	echo "<script>alert('Data Not Updated')</script>";
	include 'viewagent.php';

}


 ?>