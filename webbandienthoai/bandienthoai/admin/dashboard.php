<?php
	session_start();
	if(!isset($_SESSION['dangnhap'])){
		header('Location: index.php');
	} 
	if(isset($_GET['login'])){
 	$dangxuat = $_GET['login'];
	 }else{
	 	$dangxuat = '';
	 }
	 if($dangxuat=='dangxuat'){
	 	session_destroy();
	 	header('Location: index.php');
	 }
?>

<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>Welcome Admin</title>
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="dashboard.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link btn btn-warning mr-4" href="#">Đơn hàng <span class="sr-only">(current)</span></a>
		  </li>
	      <li class="nav-item">
	        <a class="nav-link btn btn-primary mr-4" href="xulydanhmuc.php">Danh mục</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link btn btn-danger mr-4" href="xulysanpham.php">Sản phẩm</a>
	      </li>
	       <li class="nav-item">
	        <a class="nav-link btn btn-light mr-4" href="#">Khách hàng</a>
		  </li>
		  <li class="nav-item">
		   <a class="dangxuat text-danger"href="?login=dangxuat">Đăng xuất</a> 
		  </li>
		 
		</ul>
		<p >Xin chào: <?php echo $_SESSION['dangnhap'] ?><br>
		
	</p>
	  </div>
	</nav>




</body>

        
		  

</html>