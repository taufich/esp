
<?php 
session_start();
$Username = $_SESSION['UserSession'];
if (isset($Username)) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>ESP GAS MIS</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
	<script type="text/javascript" src="jquery/jquery.min.js"></script>
</head>
<body>
	<div class="container-fluid">

		<div class="card">
			<div class="card-header bg-dark">
				<div class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
					<div class="navbar-brand">
						<h2>ESP GAS MIS</h2>
					</div>
					<!-- <div class="navbar-nav">
						<h2><h3>Taufic <i class="fas fa-check-circle"></i></h3></h2>
					</div> -->
				</div>
			</div>
			<div class="card-body">
				

				<div class="row">
					<div class="col-md-3 text-center">
							
							<span class=""> <b><?php echo $Username; ?></b> <i class="fas fa-check-circle text-primary fa-sm"></i>	</span>
							<div class="mb-2"></div>

							<div class="list-group mb-2	">
								<center>
									<i class="fas fa-user rounded-circle" style="font-size: 120px;"></i>
								</center>
							</div>

							<div class="list-group">
  								<a href="addreport.php" class="list-group-item list-group-item-action bg-dark text-light"> <i class="fas fa-plus"></i> &nbsp;Add Report</a>
  							</div>
  							<div class="mb-2"></div>
  							<div class="list-group">
  								<a href="a_viewreport.php" class="list-group-item list-group-item-action"> <i class="fas fa-eye"></i> View Report</a>
  							</div>
  							<div class="mb-2"></div>
  							<div class="list-group">
  								<a href="a_logout.php" class="list-group-item list-group-item-action"> <i class="fas fa-sign-out-alt"></i> Logout</a>
							</div>
						

					</div>
					<div class="col-md-9">
					
						
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								
								<div class="card">
									<div class="card-header bg-dark text-light text-center">
										<div class="card-title">
											<h3>Adding Report</h3>
										</div>
									</div>

									<div class="card-body">
										<form action="addreport.php" method="POST">

											<div class="input-group mb-2">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<i class="fas fa-book-reader"></i>
													</span>
												</div>
												<input type="text" name="Clients_Name" placeholder="Client's_Name" class="form-control form-control-sm">
											</div>

											<div class="input-group mb-2">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<i class="fas fa-weight"></i>
													</span>
												</div>
												<select class="form-control form-control-sm" name="Kg">
													<option>Select Kg</option>
													<option>6</option>
													<option>12</option>
													<option>15</option>
													<option>23</option>
													<option>40</option>
												</select>
											</div>

											<div class="input-group mb-2">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<i class="fas fa-drafting-compass"></i>
													</span>
												</div>
												<input type="number" name="Quantity" id="Quantity" placeholder="Quantity" class="form-control form-control-sm">
											</div>

											<div class="input-group mb-2">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<i class="fas fa-money-check-alt"></i>
													</span>
												</div>
												<input type="number" name="Price" id="Price" placeholder="Price" class="form-control form-control-sm">
											</div>


											<div class="input-group mb-2">
												<span id="results"></span>
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
												<button class="btn btn-dark btn-block btn-sm" name="btn"> <i class="fas fa-save"></i> Add Report</button>
											</div>


										</form>
									</div>
									
								</div>

							</div>
							<div class="col-md-3"></div>
						</div>

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

	$Clients_Name = $_POST['Clients_Name'];
	$Kg           = $_POST['Kg'];
	$Quantity     = $_POST['Quantity'];
	$Price        = $_POST['Price'];
	$total = $Quantity * $Price;

	$query = mysqli_query($conn,"INSERT INTO report values('','$Clients_Name','$Kg','$Quantity','$Price','no request','$Username','$total')");

	if ($query==true) {
		echo "<script>alert('Report Added')</script>";
 		// header('location:viewreport.php');
	}
	else{
		echo "<script>alert('Report not Added')</script>";
	}

}


 ?>

<?php
 } else{
 	echo "<script>alert('Login First!')</script>";
 	header('location:login.php');
 }

 ?>