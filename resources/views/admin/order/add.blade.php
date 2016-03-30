@extends('templates.admin')

@section('page_content')
<div class="container">
	<form action="" method="post" id="order_add">
		{!! csrf_field(); !!}
		<div class="ian-card">
			<div class="ian-card-header">
				<h3 class="ian-card-title">THÔNG TIN ĐƠN HÀNG</h3>
			</div>
			<div class="ian-card-content">
				<div class="row">
					<div class="col-md-4 form-row">
						<div class="input-wrapper">
							<label for="maBienNhan">Mã biên nhận</label>
							<input type="text" name="maBienNhan" class="form-control">
							<span class="input-bar"></span>
						</div>
					</div>
					<div class="col-md-4 form-row">
						<div class="input-wrapper">
							<label for="tenKhachHang">Tên khách hàng</label>
							<input type="text" name="tenKhachHang" class="form-control">
							<span class="input-bar"></span>
						</div>
					</div>
					<div class="col-md-4 form-row">
						<div class="input-wrapper">
							<label for="soDienThoai">Số điện thoại</label>
							<input type="text" name="soDienThoai" class="form-control">
							<span class="input-bar"></span>
						</div>
					</div>
					<div class="col-md-8 form-row">
						<div class="input-wrapper">
							<label for="diaChi">Địa chỉ giao hàng</label>
							<input type="text" name="diaChi" class="form-control">
							<span class="input-bar"></span>
						</div>
					</div>
					<div class="col-md-4 form-row">
						<div class="input-wrapper">
							<label for="ngayDatHang">Ngày đặt hàng</label>
							<input type="text" name="ngayDatHang" class="form-control">
							<span class="input-bar"></span>
						</div>
					</div>
					<div class="col-md-4 form-row">
						<div class="input-wrapper">
							<label for="tongTien">Tổng giá trị</label>
							<input type="text" name="tongTien" class="form-control">
							<span class="input-bar"></span>
						</div>
					</div>
					<div class="col-md-4 form-row">
						<div class="input-wrapper">
							<label for="thanhToan">Thanh toán</label>
							<input type="text" name="thanhToan" class="form-control">
							<span class="input-bar"></span>
						</div>
					</div>
					<div class="col-md-4 form-row">
						<div class="input-wrapper">
							<label for="ngayGiaoHang">Ngày giao hàng</label>
							<input type="text" name="ngayGiaohang" class="form-control">
							<span class="input-bar"></span>
						</div>
					</div>
					<div class="col-md-12 form-row">
						<div class="input-wrapper">
							<label for="ghiChuDonHang">Ghi chú đơn hàng</label>
							<textarea form="order_add" name="ghiChuDonHang" class="form-control"></textarea>
							<span class="input-bar"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="ian-card">
			<div class="ian-card-header">
				<h3 class="ian-card-title">THÔNG TIN SẢN PHẨM</h3>
				<button tabindex="-1" class="btn-circle add_field_button">+</button>
			</div>
			<div class="ian-card-content" id="products">
				<div class="row">
					<div class="col-md-3 form-row">
						<div class="input-wrapper">
							<label for="sanPham_1">Sản phẩm</label>
							<input type="text" name="sanPham[]" id="sanPham_1" class="form-control">
							<span class="input-bar"></span>
						</div>
					</div>
					<div class="col-md-2 form-row">
						<div class="input-wrapper">
							<label for="soLuong">Số lượng</label>
							<input type="number" name="soLuong[]" class="form-control">
							<span class="input-bar"></span>
						</div>
					</div>
					<div class="col-md-7 form-row">
						<div class="input-wrapper">
							<label for="ghiChuSanPham">Ghi chú sản phẩm</label>
							<input type="text" name="ghiChuSanPham[]" class="form-control">
							<span class="input-bar"></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 form-row">
						<div class="input-wrapper">
							<label for="sanPham_1">Sản phẩm</label>
							<input type="text" name="sanPham[]" id="sanPham_1" class="form-control">
							<span class="input-bar"></span>
						</div>
					</div>
					<div class="col-md-2 form-row">
						<div class="input-wrapper">
							<label for="soLuong">Số lượng</label>
							<input type="number" name="soLuong[]" class="form-control">
							<span class="input-bar"></span>
						</div>
					</div>
					<div class="col-md-7 form-row">
						<div class="input-wrapper">
							<label for="ghiChuSanPham">Ghi chú sản phẩm</label>
							<input type="text" name="ghiChuSanPham[]" class="form-control">
							<span class="input-bar"></span>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="submit-bar">
			<button class="btn-submit btn-circle" type="submit"><i class="fa fa-cloud-download"></i></button>
		</div>
	</form>
</div>
@stop