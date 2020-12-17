<div class="in-line">
    <div class="para-an" >
        <h2>GIỎ HÀNG</h2></BR>
        <form id="cart-form" action="giohang.php?action=submit" method="POST">
            <table>
                <tr>
                    <th class="product-number">STT</th>
                    <th class="product-name">Tên sản phẩm</th>
                    <th class="product-img">Ảnh sản phẩm</th>
                    <th class="product-price">Đơn giá</th>
                    <th class="product-quantity">Số lượng</th>
                    <th class="total-money">Thành tiền</th>
                    <th class="product-delete">Xóa</th>
                </tr>
                <?php
                $num = 1;
                $total=0;
                foreach($datab as $v)
                { ?>
                <tr>
                    <td class="product-number"><?=$num++;?></td>
                    <td class="product-name"><?=$v['TenDongDT']?></td>
                    <td class="product-img"><img class="img-responsive pic-in" src="images/<?php echo($v['Hinh']) ?>" alt=" " ></td>
                    <td class="product-price"><?=number_format($v['DonGia'])?></td>
                    <td class="product-quantity"><input type="text" value="<?=$_SESSION["cart"][$v['MaDongDT']]?>" name="quantity[<?=$v['MaDongDT']?>]" /></td>
                    <td class="total-money"><?=number_format($v['DonGia'] * $_SESSION["cart"][$v['MaDongDT']])?></td>
                    <td class="product-delete"><a href="giohang.php?action=delete&id=<?php echo $v['MaDongDT']?>">Xóa</a></td>
                    
                </tr>
                <?php
                $total+= $v['DonGia'] * $_SESSION["cart"][$v['MaDongDT']];
                if(!empty($_SESSION["cart"]))
                {
                $_SESSION['slsp']=$num-1;
                }
                elseif(empty($_SESSION["cart"]))
                {
                $_SESSION['slsp']=0;
                }
                
                } ?>
                <tr id="row-total">
                    <td class="product-number">&nbsp;</td>
                    <td class="product-name">Tổng tiền</td>
                    <td class="product-img">&nbsp;</td>
                    <td class="product-price">&nbsp;</td>
                    <td class="product-quantity">&nbsp;</td>
                    <td class="total-money"><span style="color: red;font-size:20px;font-weight:bold;"><?php echo number_format($total) ?></span></td>
                    <td class="product-delete">&nbsp;</td>
                </tr>
            </table>
            <div id="form-button">
                <input type="submit" name="update_click" value="Cập nhật" />
            </div>
            <hr>
            <!-- <div><label>Người nhận: </label><input type="text" value="" name="name" /></div>
            <div><label>Điện thoại: </label><input type="text" value="" name="phone" /></div>
            <div><label>Địa chỉ: </label><input type="text" value="" name="address" /></div>
            <div><label>Ghi chú: </label><textarea name="note" cols="50" rows="7" ></textarea></div> -->
            <div align="center">
                <table class="box-thanhtoan">
                    <tr>
                        <td> <p>Người nhận:</p> </td><td> <p> <?php echo $_SESSION['TenKH'];?> </p></td>
                    </tr>
                    <tr>
                        <td> <p>Điện thoại:</p> </td><td> <p> <?php echo $_SESSION['SDT'];?> </p></td>
                    </tr>
                    <tr>
                        <td> <p>Email:</p>  </td><td><p> <?php echo $_SESSION['Email'];?> </p></td   >
                    </tr>
                    <tr>
                        <td> <p>Địa chỉ:</p>  </td><td><p> <?php echo $_SESSION['Diachi'];?> </p></td>
                    </tr>
                </table>
                <input type="submit" name="order_click" value="Đặt hàng" />
            </div>
        </form>
        <div class="clearfix"> </div>
    </div>
</div>