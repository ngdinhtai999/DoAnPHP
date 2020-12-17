<div class="col-md-9 col-d">
	<div class="in-line">
		<div class="para-an" >
			<h3>Điện Thoại KHUYẾN MÃI</h3>
		</div>
		<div class="lady-in">
			<?php
				include('include/connect.php');
					$sql="SELECT * FROM `dongdienthoai` WHERE MaLoai='BP'	"  ;
				$data= $obj->prepare($sql);
				$data->execute();
				foreach ($data as $v)
				{
			?>
			<div class="col-md-4 you-para" >
				<table>
					<a href="chitiet.php?MaDongDT=<?php echo $v['MaDongDT']?>"><img class="img-responsive pic-in" src="images/<?php echo($v['Hinh']) ?>" alt=" " ></a>
					<p><?php echo $v['TenDongDT']  ?></p>
					<span><?php echo number_format($v['DonGia'])  ?> <label class="cat-in"> </label> <a href="#">Thêm vào Giỏ hàng </a></span>
				</table>
			</div>
			<?php
			}
			?>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>