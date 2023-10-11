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
			<div class="card-body bg-light">
				

				<div class="row">
					<div class="col-md-3 text-center">
						<p> <b>Taufic</b> <i class="fas fa-check-circle text-primary fa-sm"></i>	</p>

							<div class="list-group mb-2	">
								<center>
									<img src="assets/me.jpg" class="img img-responsive rounded-circle" height="180" width="180">
								</center>
							</div>


							<div class="list-group">
  								<a href="agentmanagement.php" class="list-group-item list-group-item-action"> <i class="fas fa-list-alt"></i> Agent Management</a>
  							</div>
  							<div class="mb-2"></div>
  							<div class="list-group">
  								<a href="m_viewreport.php" class="list-group-item list-group-item-action  bg-dark text-light"> <i class="fas fa-eye"></i> View Report</a>
  							</div>
  							<div class="mb-2"></div>
  							<div class="list-group">
  								<a href="m_logout.php" class="list-group-item list-group-item-action"> <i class="fas fa-sign-out-alt"></i> Logout</a>
							</div>
						

					</div>
					<div class="col-md-9">
						<div class="mb-5"></div>

						<h3 class="text-center">REPORT MANAGEMENT</h3>
						<div class="mb-5"></div>

							<div class="list-group list-group-horizontal text-center justify-content-center">
							
						<div class="list-group">
  							<a href="m_viewall.php" class="list-group-item list-group-item-action">View All REPORT</a>
  						</div>

  						&nbsp;&nbsp;&nbsp;

  						<div class="list-group">
  							<a href="request.php" class="list-group-item list-group-item-action">DELETE REQUESTS</a>
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
}else{
	header('location:m_login.php');
}

 ?>