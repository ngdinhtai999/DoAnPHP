<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include('include/head.php') ?>
	</head>
	<body>
		<!--header-->
		<?php include('include/header.php');?>
		<!--content-->
		<div class="content">
			<div class="container">
				<div class="women-in">
					<div class="col-md-9 col-d">
						<div class="banner">
							<div class="banner-matter">
								<h2>SANG TRỌNG</h2>
								<p>Kiểu ngoài đẹp mắt</p>
							</div>
						</div>
						<!---->
						<div class="lady-in">
							<?php include ('include/content-left-sanpham.php') ?>
							
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<?php include('include/content-right-dienthoai.php'); ?>
				<div class="clearfix"> </div>
			</div>
			<!--content-down-->
			<?php include('include/content-down.php'); ?>
			<!---->
			<?php include('include/footer.php'); ?>
		</body>
	</html>