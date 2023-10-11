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
					<div class="col-md-9">

						<h3 class="text-center">AGENT MANAGEMENT</h3>

							<div class="list-group list-group-horizontal text-center justify-content-center mb-2">
							
						<div class="list-group">
  							<a href="viewagent.php" class="list-group-item list-group-item-action">View All Agents</a>
  						</div>

  						&nbsp;&nbsp;&nbsp;

  						<div class="list-group">
  							<a href="status.php" class="list-group-item list-group-item-action bg-dark text-light">Block/Unblock Agent</a>
  						</div>

  						&nbsp;&nbsp;&nbsp;

  						<div class="list-group">
  							<a href="addagent.php" class="list-group-item list-group-item-action">Add An Agent</a>
  						</div>

						</div>

						<table class="table table-striped table-sm text-center">
							

							<?php 

							include 'connection.php';

							$query = mysqli_query($conn,"SELECT * FROM agent");

							$num = mysqli_num_rows($query);

							if ($num>0) {
								?>
								<tr>
								<thead class="bg-dark text-light">
								<th>Id</th>
								<th>Names</th>
								<th>UserName</th>

								<th>Option</th>
								</thead>
							</tr>
								<?php
								while ($data = mysqli_fetch_array($query)) {
									?>
								

								<tr>
									<td><?php echo $data['Id']; ?></td>
									<td><?php echo $data['Names']; ?></td>
									<td><?php echo $data['Username']; ?></td>

									<td>
										<?php 

										if ($data['status']=="blocked") {
											echo "";
											?>
										
										<a title="unBlock" onclick="return confirm('Unblock this agent?')" href="unblock.php?Id=<?php echo $data['Id'] ?>"><i class="fas fa-user-check text-primary"></i></a>
										
										<?php 
										
									}
										else{
											echo"";

										 ?>
										<a title="block" onclick="return confirm('Are you sure you want to Block this agent ?')" href="block.php?Id=<?php echo $data['Id'] ?>"><i class="fas fa-user-alt-slash text-danger"></i></a>
										<?php 
										
									}
										 ?>
										
									</td>
								</tr>


							<?php
								}
							}else{
								echo "<center><span class='badge badge-success p-2 mb-2'>There is No Agent <i class='fas fa-bars'></i></span></center>";
							}

							 ?>

						</table>

						

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