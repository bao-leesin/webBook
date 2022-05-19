<?php
require_once ('dbhelper.php');

$s_username = $s_password = $s_email = $s_phone = $s_address = '';

if (!empty($_POST)) {
	$s_id = '';

	if (isset($_POST['username'])) {
		$s_fullname = $_POST['username'];
	}

	if (isset($_POST['email'])) {
		$s_email = $_POST['email'];
	}

	if (isset($_POST['password'])) {
		$s_password = $_POST['password'];
	}

	if (isset($_POST['phone'])) {
		$s_phone = $_POST['phone'];
	}

	if (isset($_POST['address'])) {
		$s_address = $_POST['address'];
	}

	

	$s_username = str_replace('\'', '\\\'', $s_username);
	$s_password      = str_replace('\'', '\\\'', $s_password);
	$s_email = str_replace('\'', '\\\'', $s_email);
	$s_phone = str_replace('\'', '\\\'', $s_phone);
	$s_address  = str_replace('\'', '\\\'', $s_address);
	

	register($s_username,$s_password,$s_email,$s_phone,$s_address);
	

	// echo $sql;

	

	header('Location: login.php');
	die();
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Tạo tài khoản</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


	
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">

			<div class="panel-heading">
				<h2 class="text-center"> Form đăng ký </h2>
			</div>

			<div class="panel-body">
				<form method="post">

					<div class="form-group">
					  <label for="username">Tên đăng nhập:</label>
					  <input required="true" type="text" class="form-control" id="username" name="username" >
					</div>

					<div class="form-group">
						<label for="email">Email:</label>
						<input required="true" type="email" class="form-control" name="email" id="email" >
					</div>

					<div class="form-group">
					  <label for="password">Mật khẩu:</label>
					  <input required="true" type="password" class="form-control" name="password" id="password">
					</div>

					<div class="form-group">
					  <label for="phone">Số điện thoại:</label>
					  <input required="true" type="text" class="form-control" id="phone" name="phone" >
					</div>
					
					<div class="form-group">
					  <label for="address">Địa chỉ:</label>
					  <input required="true" type="text" class="form-control" id="address" name="address">
					</div>
					<button class="btn btn-success">Đăng ký</button>
					<a href="login.php"> <button class="btn btn-danger" type="button"> Back </button> </a>
				</form>
			</div>
		</div>
	</div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</html>