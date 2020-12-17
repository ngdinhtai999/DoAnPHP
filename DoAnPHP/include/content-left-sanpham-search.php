<div class="col-md-9 col-d">
	<div class="in-line">
		<div class="para-an" >
			<h3>KẾT QUẢ TÌM KIẾM</h3>
		</div>
		<div class="lady-in">
			<?php
			include('include/connect.php');
			if (isset($_POST['search']))
			{
			$data = $_POST['search'];
			$query = "SELECT * FROM dongdienthoai INNER JOIN hangsanxuat WHERE dongdienthoai.MaHangSX=hangsanxuat.MaHangSX AND TenDongDT like '%$data%'";
			$stm = $obj->prepare($query);
			$stm->execute();
			$datab = $stm->fetchAll();
			if (!$datab)
			{
			    echo	" ";
			}
			}
			foreach ($datab as $v)
			{
			?>
			<div class="col-md-4 you-para"  >
				<table>
					<a href="chitiet.php?MaDongDT=<?php echo $v['MaDongDT']?>"><img class="img-responsive pic-in" src="images/<?php echo($v['Hinh']) ?>" alt=" " ></a>
					<p><?php echo $v['TenDongDT']  ?></p>
					<p><?php echo $v['TenHangSX']  ?></p>
					<span><?php echo number_format($v['DonGia'])?><label class="cat-in"> </label> <a href="gi">Thêm vào Giỏ hàng </a></span>
				</table>
			</div>
			<?php
			}

			?>
			<div class="clearfix"> </div>
			<h3>TÌM KIẾM DUOC <?php echo count($datab); ?> KET QUA</h3>
		</div>
	</div>
</div>