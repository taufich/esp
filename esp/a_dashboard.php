
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
  								<a href="addreport.php" class="list-group-item list-group-item-action"> <i class="fas fa-plus"></i> &nbsp;Add Report</a>
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
						<div class="mb-5"></div>
						<h2 class="text-center">AGENT DASHBOARD</h2>

					</div>
				</div>



			</div>
			<!-- <div class="card-footer"></div> -->
		</div>

	</div>

</body>
</html>

<?php
 } else{
 	echo "<script>alert('Login First!')</script>";
 	header('location:login.php');
 }

 ?>
