<div class="col-md-3 col-m-left">
	<div class="in-left">
	</div>
	<div class="discount">
		<a href="single.html"><img class="img-responsive pic-in" src="images/p2.jpg" alt=" " >	</a>
		<p class="no-more">Phụ kiện <b>Ốp lưng</b> <span>Chính hãng</span></p>
		<a href="#" class="know-more">Truy cập</a>
	</div>
	
	<div class="twitter-in">
		<h5>TIN TỨC</h5>
		<?php
			include('include/connect.php');
			$sql="SELECT * FROM `tintuc` LIMIT 3 ";
			$data= $obj->prepare($sql);
			$data->execute();
			foreach ($data as $v)
			{
		?>
		<div class="up-date">
			<a href="#"> <?php echo $v['tieudetin'] ?></a>
		</div>
		<?php
		}
		?>
		<a href="#" class="tweets">Xem thêm...</a>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="clearfix"> </div>
</div>