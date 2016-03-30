@extends('templates.admin')

@section('page_content')
<div class="container">
	<div class="ian-card">
		<div class="user-heading">
			<div class="row">
				<div class="col-xs-3  col-md-2 user-heading-ava">
					<img src="{{ asset('public/frontend/images/user@2x.png')}}" class="img-responsive">
				</div>
				<div class="col-xs-9 col-md-10 user-heading-content">
					<div class="col-md-6">
						<div class="form-row">
							<div class="input-wrapper">
								<label for="hoTen">Họ tên</label>
								<input type="text" name="hoTen" class="form-control">
								<span class="input-bar"></span>
							</div>
						</div>
						<div class="form-row">
							<div class="input-wrapper">
								<label for="email">Email</label>
								<input type="text" name="email" class="form-control">
								<span class="input-bar"></span>
							</div>
						</div>
					</div>
					<div class="col-md-6">
					<div class="form-row">
						<div class="input-wrapper">
							<label for="tenDangNhap">Tên đăng nhập</label>
							<input type="text" name="tenDangNhap" class="form-control">
							<span class="input-bar"></span>
						</div>
					</div>
					<div class="form-row">
						<div class="input-wrapper">
							<label for="matKhau">Mật khẩu</label>
							<input type="text" name="matKhau" class="form-control">
							<span class="input-bar"></span>
						</div>
					</div>
					<div class="form-row">
						<div class="input-wrapper">
							<label for="xacNhanMatKhau">Xác nhận mật khẩu</label>
							<input type="text" name="xacNhanMatKhau" class="form-control">
							<span class="input-bar"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="user-info">
		<div class="row">
			<div class="col-xs-6">

			</div>
		</div>
	</div>
</div>
</div>
@stop