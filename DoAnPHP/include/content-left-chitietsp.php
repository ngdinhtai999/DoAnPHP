<?php
		include('include/connect.php');
		$idsanpham =$_GET['MaDongDT'];
		$sql="SELECT * FROM `dongdienthoai` WHERE MaDongDT='$idsanpham'" ;
		$tam= $obj->query($sql);
		$data=$tam->fetch();
?>
<div class="col-md-9 col-d">
	<div class="single_grid">
		<div class="grid images_3_of_2">
			<ul id="etalage">
				<li>
					<a href=#>
						<img class="etalage_thumb_image img-responsive"  src="images/<?php echo($data['Hinh']) ?>" alt="" >
					</a>
				</li>
				
			</ul>
			<div class="clearfix"> </div>
		</div>
		<!---->
		<div class="span1_of_1_des">
			<div class="desc1">
				<h3> <?php echo $data['TenDongDT'] ?> </h3>
				
				<h5>Giá: <?php echo number_format($data['DonGia']) ?> vnđ</h5>
				<div class="available">
					<div class="form-in">
						<a href="content-left-giohang.php">Thêm vào Giỏ hàng</a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="share-desc">
					<div class="share">
						<h4>Chia sẻ :</h4>
						<ul class="share_nav">
							<li><a href="#"><img src="images/facebook.png" title="facebook"></a></li>
							<li><a href="#"><img src="images/twitter.png" title="Twiiter"></a></li>
							<li><a href="#"><img src="images/rss.png" title="Rss"></a></li>
							<li><a href="#"><img src="images/gpluse.png" title="Google+"></a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="sap_tabs">
		<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
			<ul class="resp-tabs-list">
				<li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>Thông tin sản phẩm</span></li>
				<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Bình luận</span></li>
				<div class="clearfix"></div>
			</ul>
			<div class="resp-tabs-container">
				<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Product Description</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
				
			</div>
			
			<h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>Bình luận</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
			<div class="facts">
				<p >Tuyệt vời</p>
			</div>
		</div>
	</div>
</div>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion
	width: '100%', //auto or any width like 600px
	fit: true   // 100% fit in a container
	});
	});
</script>
</div>
</div>
</div>
<div class="clearfix"> </div>

</div>