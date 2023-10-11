<!DOCTYPE html>
<html>
<head>
	<title>ESP GAS MIS</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>
<body class="bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="card" style="margin-top: 140px;">
					<div class="card-header bg-info">
						<div class="card-title" style="
							height: 17px;

						">
							<h3 class="text text-center text-light">Login Here!</h3>
						</div>
					</div>
					<div class="card-body">

						<form action="" method="POST">
							


						<!-- UserName -->
						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fas fa-user"></i>
								</span>
								
							</div>

							<input type="text" name="Username" class="form-control" placeholder="UserName">
						</div>

						<!-- Password -->

						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fas fa-key"></i>
								</span>
								
							</div>

							<input type="password" name="Password" class="form-control " placeholder="**********">
						</div>

						<!-- button -->

						<div class="input-group mb-2">
							<button class="btn btn-info btn-block" name="loginbtn"><i class="fas fa-sign-in-alt"></i> Login</button>
						</div>

						<div class="input-group">
							<a href="m_login.php" class="text-center">Manager Login</a>
						</div>

						<!-- PHP Message -->

						<center><span><?php include 'validation.php'; ?></span></center>


						</form>

					</div>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>

</body>
</html>