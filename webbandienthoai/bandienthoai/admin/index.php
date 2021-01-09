<?php
	session_start();
 include('../db/connect.php'); 
?>
<?php
	// session_destroy();
	// unset('dangnhap');
	if(isset($_POST['dangnhap'])) {
		$taikhoan = $_POST['taikhoan'];
		$matkhau = md5($_POST['matkhau']);
		if($taikhoan=='' || $matkhau ==''){
			echo '<p>Xin nhập đủ</p>';
		}else{
			$sql_select_admin = mysqli_query($con,"SELECT * FROM tbl_admin WHERE email='$taikhoan' AND password='$matkhau' LIMIT 1");
			$count = mysqli_num_rows($sql_select_admin); //tao bien count de kiem tra thong tin trong co so du lieu 
			$row_dangnhap = mysqli_fetch_array($sql_select_admin);
			if($count>0){
				$_SESSION['dangnhap'] = $row_dangnhap['admin_name'];
				$_SESSION['admin_id'] = $row_dangnhap['admin_id'];
				header('Location: dashboard.php');
			}else{
				echo '<p>Tài khoản hoặc mật khẩu sai</p>';
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng nhập Admin</title>
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style1.css">
</head>
<body>
	<div class="container">
		<h2>Đăng nhập Admin</h2>
		<div class="col-md-11">
		<div class="form-group">
			<form action="" method="POST">
			<label>Tài khoản</label>
			<input type="text" name="taikhoan" placeholder="Điền Email" class="form-control"><br>
			<label>Mật khẩu</label>
			<input type="password" name="matkhau" placeholder="Điền mật khẩu" class="form-control"><br>
			<input type="submit" name="dangnhap" class="btn btn-primary" value="Đăng nhập Admin">
			</form>
		</div>
		</div>
	</div>
</body>
</html>