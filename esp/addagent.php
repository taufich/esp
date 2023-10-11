<?php 
session_start();
$m_password = $_SESSION['M_SESSION'];;
if (isset($m_password)) {
?>

<!DOCTYPE html>
<html>
<head>
	<title>ESP GAS MIS</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>
<body>
	<div class="container-fluid">

		<div class="card">
			<div class="card-header bg-dark">
				<div class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
					<div class="navbar-brand">
						<h2>ESP GAS MIS <span style="font-size: 20px;">Manager Dashboard</span>	</h2>
					</div>
					<!-- <div class="navbar-nav">
						<h2><h3>Taufic <i class="fas fa-check-circle"></i></h3></h2>
					</div> -->
				</div>
			</div>
			<div class="card-body">
				

				<div class="row">
					<div class="col-md-3 text-center">
						<p> <b>Taufic</b> <i class="fas fa-check-circle text-primary fa-sm"></i>	</p>

							<div class="list-group mb-2	">
								<center>
									<img src="assets/me.jpg" class="img img-responsive rounded-circle" height="180" width="180">
								</center>
							</div>


							<div class="list-group">
  								<a href="agentmanagement.php" class="list-group-item list-group-item-action bg-dark text-light"> <i class="fas fa-list-alt"></i> Agent Management</a>
  							</div>
  							<div class="mb-2"></div>
  							<div class="list-group">
  								<a href="m_viewreport.php" class="list-group-item list-group-item-action"> <i class="fas fa-eye"></i> View Report</a>
  							</div>
  							<div class="mb-2"></div>
  							<div class="list-group">
  								<a href="m_logout.php" class="list-group-item list-group-item-action"> <i class="fas fa-sign-out-alt"></i> Logout</a>
							</div>
						

					</div>
					<div class="col-md-9 p-4">

						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								
								<div class="card">
									<div class="card-header bg-dark text-light text-center">
										<div class="card-title">
											<h3>Adding Agent</h3>
										</div>
									</div>

									<div class="card-body">
										<form action="addagent.php" method="POST">

											<div class="input-group mb-2">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<i class="fas fa-book-reader"></i>
													</span>
												</div>
												<input type="text" name="Names" placeholder="Names" class="form-control form-control-sm">
											</div>

											<div class="input-group mb-2">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<i class="fas fa-transgender-alt"></i>
													</span>
												</div>
												<select  class="form-control form-control-sm" name="Gender">
													<option>Select Gender</option>
													<option>Male</option>
													<option>Female</option>
												</select>
											</div>

											<div class="input-group mb-2">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<i class="fas fa-location-arrow"></i>
													</span>
												</div>
												<input type="text" name="Location" placeholder="Location" class="form-control form-control-sm">
											</div>

											<div class="input-group mb-2">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<i class="fas fa-user"></i>
													</span>
												</div>
												<input type="text" name="Username" placeholder="Username" class="form-control form-control-sm">
											</div>

											<div class="input-group mb-2">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<i class="fas fa-key"></i>
													</span>
												</div>
												<input type="password" name="Password" placeholder="Password" class="form-control form-control-sm">
											</div>

											<!-- <div class="input-group mb-2">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<i class="fas fa-key"></i>
													</span>
												</div>
												<input type="password" name="Password" class="form-control form-control-sm" placeholder="Confirm Password">
											</div> -->

											<div class="input-group">
												<button class="btn btn-dark btn-block btn-sm" name="btn"> <i class="fas fa-save"></i> Add Agent</button>
											</div>


										</form>
									</div>
									
								</div>

							</div>
							<div class="col-md-3"></div>
						</div>

						
						

						

				</div>



			</div>
			<!-- <div class="card-footer"></div> -->
		</div>





	</div>

</body>
</html>


<?php 

if (isset($_POST['btn'])) {

	 include 'connection.php';


	 // $Id = $_POST['Id'];
	 $Names = $_POST['Names'];
	 $Gender = $_POST['Gender'];
	 $Location = $_POST['Location'];
	 $Username = $_POST['Username'];
	 $Password = md5($_POST['Password']);

	 $query = mysqli_query($conn,"INSERT INTO agent VALUES('','$Names','$Gender','$Location','$Username','$Password','allowed')");

	 if ($query==true) {
	 	echo "<script>alert('Agent Created')</script>";
	 }
	 else{
	 	echo "<script>alert('Agent not Created')</script>";
	 	// include 'addagent.php';
	 }
}	

 ?>



<?php
}else{
	header('location:m_login.php');
}

 ?>