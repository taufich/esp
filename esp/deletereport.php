<?php 

include 'connection.php';


$Id = $_GET['Id'];

$query1 = mysqli_query($conn,"SELECT * FROM report where Id='$Id'");

$num  = mysqli_num_rows($query1);
while ($data=mysqli_fetch_array($query1)) {
	$status = $data['status'];

	if ($status == "no request") {
		$query = mysqli_query($conn,"UPDATE report SET status='requested' where Id='$Id'");

		if ($query==true) {
			echo "<script>alert('Request Sent')</script>";
			include 'a_viewreport.php';
		}
		else{
			echo "<script>alert('Request not Sent')</script>";
			include 'a_viewreport.php';

			}
	}else{

		$query = mysqli_query($conn,"UPDATE report SET status='no request' where Id='$Id'");

		if ($query==true) {
			echo "<script>alert('Request un Sent')</script>";
			include 'a_viewreport.php';
		}
		else{
			echo "<script>alert('Request not unSent')</script>";
			include 'a_viewreport.php';

			}


	}
 }


 ?>