<?php include 'koneksi.php';
error_reporting(0);
if (isset($_POST['login'])) {
	$user     	= $_POST['user'];
	$password 	= $_POST['password'];
	$sukses     = "";
	$error      = "";

	$q1			= mysqli_query($konek, "SELECT * FROM admin WHERE user='$user'");
	$q2			= mysqli_num_rows($q1);
	if ($q2 === 1) {
		$pass = mysqli_fetch_assoc($q1);
		$q2 = $pass['password'];
		if ($q2 <> $password) {
			$error = "password salah!";
		} else {
			$_SESSION['log'] = true;
			header("location:dashboard.php");
		}
	} else {
		$error = "username dan password salah!";
	}
}
?>
<!doctype html>
<html lang="en">
<title>Dinas Perhubungan</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="images/favicon.png">
<link rel="stylesheet" href="css/style.css">
</head>

<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<section>
		<br><br>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<img src="images/favicon.png" class="circle" width="90">
					<h2 class="heading-section">DINAS PERHUBUNGAN</h2>
					<h7 class="mb-4 text-center" style="color:white;">Sistem Informasi Rambu Lalu Lintas</h7>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<?php
						if ($error) {
						?><center>
							<div class="alert alert-danger" role="alert">
								<?php echo$error?>
							</div></center>
						<?php
						}
						?>
						<h3 class="mb-4 text-center">Member Login</h3>
						<div class="login">
							<form qq method="POST" class="login-email">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Username" name="user">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" placeholder="Password" name="password">
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary submit px-3" value="Login" name="login">Masuk</button>
								</div>
								<div class="form-group d-md-flex">
									<div class="w-50 text-left">
										<label class="checkbox-wrap checkbox-primary">Ingat Saya
											<input type="checkbox" checked>
											<span class="checkmark"></span>
										</label>
									</div>
									<a href="">
										<div class="w-50 text-md-right">Lupa Password
									</a>
								</div>
						</div>
						</form>
	</section>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>