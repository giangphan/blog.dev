@extends('templates.admin')

@section('page_content')
<div class="container dashboard">
	<div class="ian-card">
		<div class="ian-card-content">
			<div class="row">
				<div class="col-xs-12">
					<table id="users" class="table table-hover dataTable" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th></th>
								<th>ID</th>
								<th>Tên</th>
								<th>Địa chỉ</th>
								<th>SĐT</th>
								<th>Ngày giao</th>
								<th>TT</th>
								<th>Ghi chú</th>
								<th></th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


@stop

@section('script')
<script>
	function format ( d ) {
    // `d` is the original data object for the row
    var text = '<div class="row details-row"><div class="col-md-6"><p><b>Ngày đặt</b>: '+d.ngayDat+
    '</p></div><div class="col-md-6"><p><b>Tổng tiền</b>: '+commaSeparateNumber(d.tongTien)+
    ' đ</p><p><b>Còn lại</b>: '+commaSeparateNumber(d.thanhToan)+
    ' đ</p></div><div class="col-md-6"><p><b>Thời gian tạo ĐH</b>: ' + d.created_at + 
    '</p></div><div class="col-md-6"><p><b>Thời gian cập nhật cuối</b>: ' + d.updated_at + 
    '</p></div></div>';
    text += '<div class="col-xs-12 col-md-10 col-md-offset-1"><table cellspacing="0" class="table table-bordered">'+
    '<thead><tr><th>Sản phẩm</th><th>Số lượng</th><th>Ghi chú</th></tr></thead>';
    for (i = 0; i < d.product.length; i++) { 
    	text += '<tr><td>'+d.product[i].sanPham+'</td>'+
    	'<td>'+d.product[i].soLuong+'</td>'+
    	'<td>'+d.product[i].ghiChuSanPham+'</tr>';
    }
    text +='</table></div>';
    return text;
}

function commaSeparateNumber(val) {
	while (/(\d+)(\d{3})/.test(val.toString())) {
		val = val.toString().replace(/(\d+)(\d{3})/, '$1' + '.' + '$2');
	}
	return val;
}

$(document).ready(function() {
	var table = $('#users').DataTable({
		ajax: "{!! route('getGiaoTrongNgayData') !!}",
		"language": {
			"lengthMenu": "Hiện _MENU_ dòng mỗi trang",
			"zeroRecords": "Opps !!! Không có dữ liệu trùng khớp",
			"info": "Hiển thị trang _PAGE_ trong _PAGES_",
			"infoEmpty": "Không có dữ liệu",
			"search":         "Lọc:",
			"thousands":      ".",
			"infoFiltered": "(Kết quả lọc từ _MAX_ dữ liệu)",
			"paginate": {
				"first":      "First",
				"last":       "Last",
				"next":       "Next",
				"previous":   "Prev"
			},
		},
		ordering: false,
		columns: [
		{
			"className":      'details-control',
			"orderable":      false,
			"data":           null,
			"defaultContent": ''
		},
		{ data: 'maDonHang', name: 'maDonHang',className:'col-id' },
		{ data: 'customer.tenKhachHang', name: 'khachHang' },
		{ data: 'diaChi', name: 'diaChi' },
		{ data: 'customer.soDienThoai', name: 'soDienThoai' },
		{ data: 'ngayGiao', name: 'ngayGiao'},
		{ data: 'status.ten', name: 'status.ten'},
		{ data: 'ghiChuDonHang', name: 'ghiChu'},
		{
			"className":      'action-control',
			"data":           null,
			"defaultContent": ''
		},
		],
		
		"columnDefs": [
		{
			"render": function (data, type, row) {
				return commaSeparateNumber(data);
			},
			"targets": [6]
		},
		],
	});
	$('#users tbody').on('click', 'td.details-control', function () {
		var tr = $(this).closest('tr');
		var row = table.row( tr );

		if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    } );
});
</script>
@stop