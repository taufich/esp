<?php 


if (isset($_POST['btn'])) {
	 include 'connection.php';
	$Id = $_POST['Id'];
	$Clients_Name = $_POST['Clients_Name'];
	$Kg           = $_POST['Kg'];
	$Quantity     = $_POST['Quantity'];
	$Price        = $_POST['Price'];

	$query = mysqli_query($conn,"UPDATE `report` SET `Clients_Name` = '$Clients_Name', `Kg` = '$Kg', `Quantity` = '$Quantity', `Price` = '$Price' WHERE `report`.`Id` = '$Id'");

	if ($query==true) {
		echo "<script>alert('Report Updated')</script>";
 		
 		include 'a_viewreport.php';
	}
	else{
		echo "<script>alert('Report not Updated')</script>";
		include 'a_viewreport.php';
	}

}


 ?>