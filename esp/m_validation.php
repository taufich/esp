<?php

if (isset($_POST['loginbtn'])) {

	//session

		session_start();

	 // connacting to DB 
		include 'connection.php';

	// Declaration

		$m_password = $_POST['m_password'];

	// query

		$query = mysqli_query($conn,"SELECT * FROM manager where m_password='$m_password'");

		$num = mysqli_num_rows($query);


	 // condition

		if ($num>0) {

			$_SESSION['M_SESSION']=$m_password;

			echo "<script>alert('Welcome')</script>";
			header('location:m_dashboard.php');
		}else{
			echo "<span class='text text-danger'><b>Incorrect info...</b></span>";
		}
		


}

 ?>