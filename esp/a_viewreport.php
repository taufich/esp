
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
  								<a href="a_viewreport.php" class="list-group-item list-group-item-action bg-dark text-light"> <i class="fas fa-eye"></i> View Report</a>
  							</div>
  							<div class="mb-2"></div>
  							<div class="list-group">
  								<a href="a_logout.php" class="list-group-item list-group-item-action"> <i class="fas fa-sign-out-alt"></i> Logout</a>
							</div>
						

					</div>
					<div class="col-md-9">
						<!-- <div class="mb-5"></div> -->
						<h4 class="text-center">Report</h4>

						<table class="table table-striped table-sm text-center">
							

							<?php 

							include 'connection.php';

							$query = mysqli_query($conn,"SELECT * FROM report where user='$Username'");

							$num = mysqli_num_rows($query);

							if ($num>0) {
								?>
								<tr>
								<thead class="bg-dark text-light">
								<th>Client's Name</th>
								<th>Kg</th>
								<th>Quantity</th>
								<th>Price</th>
								<th>Total</th>
								<th>Status</th>
								<th>Option</th>
								</thead>
							</tr>
								<?php
								while ($data = mysqli_fetch_array($query)) {
									?>
								

								<tr>
									<?php $data['Id']; ?>
									<td><?php echo $data['Clients_Name']; ?></td>
									<td><?php echo $data['Kg']; ?></td>
									<td><?php echo $data['Quantity']; ?></td>
									<td><?php echo $data['Price']; ?></td>
									<td><?php echo $data['total']; ?></td>
									<td><span>
										<?php 
											$data['status']; 
											if ($data['status']=="no request") {
												echo "<span  class='badge badge-success p-2'>No Request</span>";
											}
											else{
												echo "<span  class='badge badge-danger p-2'>Delete Requested</span>";


											}


										?>
											
										</span></td>
									<td>
										<a onclick="return confirm('you want to send  delete request ?')" href="deletereport.php?Id=<?php echo $data['Id'] ?>"><i class="fas fa-trash text-danger"></i></a>
										&nbsp;
										<a onclick="return confirm('Continue?')" href="updatereport.php?Id=<?php echo $data['Id'] ?>"><i class="fas fa-edit"></i></a>
									</td>
								</tr>


							<?php
								}
							}else{
								echo "<div class='mb-5'></div>";
								echo "<center><span class='badge badge-success p-3 mb-2'>There is No Report &nbsp;&nbsp;<i class='fas fa-clock'></i></span></center>";
							}

							 ?>

						</table>

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
