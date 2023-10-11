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
						<!-- <div class="mb-1"></div> -->

						<h3 class="text-center">Delete Requests</h3>
						<div class="mb-2"></div>
						<table class="table table-striped table-sm text-center">
							

							<?php 

							include 'connection.php';

							$query = mysqli_query($conn,"SELECT * FROM report where status='requested'");

							$num = mysqli_num_rows($query);

							if ($num>0) {
								?>
								<tr>
								<thead class="bg-dark text-light">
								<th>Client's Name</th>
								<th>Kg</th>
								<th>Quantity</th>
								<th>Price</th>
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
										<a onclick="return confirm('Delete this?')" href="deletereply.php?Id=<?php echo $data['Id'] ?>"><i class="fas fa-trash text-danger"></i></a>
									</td>
								</tr>


							<?php
								}
							}else{
								echo "<div class='mb-5'></div>";
								echo "<center><span class='badge badge-success p-3 mb-2'>There is No Deleting Requests &nbsp;&nbsp;<i class='fas fa-clock'></i></span></center>";
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
}else{
	header('location:m_login.php');
}

 ?>