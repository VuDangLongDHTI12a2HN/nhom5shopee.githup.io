<div class="container-fluid">
	<form action="" method="POST" role="form" style="padding: 20px 0;">
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-6">
				<legend>Thông tin giao hàng</legend>
				<i>Giao hàng tận nhà chỉ áp dụng ở TP HCM</i>
				<div class="form-group">
				<label for="">Tên: </label>
				<input type="text" class="form-control" id="ten" name="ten" value="">
			</div>
			<div class="form-group">
				<label for="">Số điện thoại: </label>
				<input type="number" class="form-control" name="sodt" id="order_tel" value="">
			</div>
			<div class="form-group">
				<label for="">Quận: </label>
				<select class="form-control" name="quan" id="quan">
					<option  value="Hoàng Mai">Hoàng Mai</option>
					<option  value="Quận 2">Đống Đa</option>
					<option  value="Quận 1">Hoàn Kiếm</option>
					<option  value="Quận 4">Cầu Giấy</option>
					<option  value="Quận 5">Long Biên</option>
					<option  value="Quận 6">Hà Đông</option>
					<option  value="Quận 7">Nam Từ Liêm</option>
					<option  value="Quận 8">Bắc Từ Liêm</option>
					<option  value="Quận 9">Thanh Xuân</option>
					<option  value="Quận 10">Ba Đình</option>
					<option  value="Quận 11">Hai Bà Trưng</option>
					<option  value="Quận 12">Tây Hồ</option>
				
				</select>
			</div>
			<div class="form-group">
				<label for="">Địa chỉ cụ thể: </label>
				<input type="text" class="form-control" name="dc" id="addr"  value="">
			</div>
				<a id="orderCompleteBtn" class="btn btn-primary btn-lg pull-right">Xác nhận</a><br><br>
			</div>

			<div class="col-lg-4">
				<h4>Thông tin đơn hàng</h4>
				<table class="table" style="font-size: 14px; background-color: #eaeaea">
					<tbody>
						<?php for($i = 0; $i < count($data); $i++){ ?>
						<tr>
							<td><img src="<?php echo $data[$i]['anhchinh']; ?>"  class='sanpham' data-masp='<?php echo $data[$i]['masp'] ?>' style="width: 50px"></td>
							<td><?php echo $data[$i]['tensp'] ?></td>
							<td class="prices" data-price='<?php echo $data[$i]['gia'] ?>'><?php echo $data[$i]['gia']." x "; ?><input type="number" name="num[]" class="num" value="<?php echo $data[$i]['num'] ?>" style="width: 40px"></td>
						</tr>
						<?php } ?>
						<tr>
							<td colspan="4" style="text-align: right;">
								<h3><b>Tổng tiền: <span style="color: red"></b><span id='totalPrice' style="color: red; font-size: 28px;"><?php echo number_format($title, 0, ',', ' ') ?></span></span> VND</h3>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</form>
</div>
