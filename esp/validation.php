<?php

if (isset($_POST['loginbtn'])) {

	 //  Session

		session_start();

	 // connecting to DB 
		include 'connection.php';

	// Declaration

		$Username = $_POST['Username'];
		$Password = md5($_POST['Password']);

	// query

		$query = mysqli_query($conn,"SELECT * FROM agent where Username='$Username' and Password='$Password' and status='allowed'");

		$query1 = mysqli_query($conn,"SELECT * FROM agent where Username='$Username' and Password='$Password' and status='blocked'");

		$num = mysqli_num_rows($query);
		$num1 = mysqli_num_rows($query1);

	 // condition

		if ($num1>0) {
			echo "<span class='badge badge-danger p-2'>$Username You are blocked by manager</span>";
		}
		else{

	 	if ($num>0) {

	 		$_SESSION['UserSession'] = $Username;

	 	 	header('location:a_dashboard.php');

	 	}

	 	else{
	 	 	echo "<span class='badge badge-danger p-2'>Incorrect info </span>";
				}

		}


}

 ?>