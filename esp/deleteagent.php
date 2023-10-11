<?php 

	include 'connection.php';

$Id = $_GET['Id'];

$query = mysqli_query($conn,"DELETE FROM AGENT WHERE Id = '$Id'");

if ($query==true) {
	// echo "<span class='badge badge-danger p-2'>Data Has Been Deleted <i class='fas fa-trash-alt'></i> </span>";
	echo "<script>alert('Deleted!')</script>";
	include 'viewagent.php';
	
}
else{
		echo "<script>alert('Not Deleted!')</script>";
	include 'viewagent.php';

	

}

 ?>