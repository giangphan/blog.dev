<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Input;
use App\Order;
use App\Customer;
use App\Task;
use App\Product;
use Datatables;

use App\Http\Requests;
class OrderController extends Controller
{
	public function dashboard() {
		// $order = Order::with('product','customer')->get();
		// var_dump($order);
		return view('admin.dashboard');
	}

	public function getDashboardData() {
		$order = Order::with('product','customer','status')->get();
		return Datatables::of($order)->make(true);
	}

	public function getAdd() {
		return view('admin.order.add');
	}
	
	public function GiaoTrongNgayView() {
		$gmt7 = "7" * 60 * 60;
        $today = gmdate("Y-m-d", time() + $gmt7);
        $order = Order::where('ngayGiao','=',$today)->with('product','customer','status')->get();
        // var_dump($order);
		return view('admin.order.GiaoTrongNgay');
	}

	public function getGiaoTrongNgayData() {
		$gmt7 = "7" * 60 * 60;
        $today = gmdate("Y-m-d", time() + $gmt7);
       
        $order = Order::where('ngayGiao','=',$today)->with('product','customer','status')->get();
		return Datatables::of($order)->make(true);

		
	}
	public function ThemDonHang() {
		$re = Input::all();
		$cus = new Customer;
		$cus->tenKhachHang = $re["tenKhachHang"];
		$cus->soDienThoai = $re["soDienThoai"];
		$cus->save();

		$order = new Order;
		$order->maDonHang = $re["maBienNhan"];
		$order->maKhachHang = $cus->id;
		$order->diaChi = $re["diaChi"];
		$order->ngayDat = $re["ngayDatHang"];
		$order->ngayGiao = $re["ngayGiaohang"];
		$order->tongTien = $re["tongTien"];
		$order->thanhToan = $re["thanhToan"];
		$order->ghiChuDonHang = $re["ghiChuDonHang"];
		$order->tinhTrangDonHang = 1;
		$order->save();


		$sanPham = $re["sanPham"];
		$soLuong = $re["soLuong"];
		$ghiChu = $re["ghiChuSanPham"];
		foreach( $sanPham as $cot => $sp  ){
			$product = new Product;
			$product->donHang = $order->id;
			$product->sanPham = $sp;
			$product->soLuong = $soLuong[$cot];
			$product->tinhTrangSanPham = "Sản phẩm mới";
			$product->ghiChuSanPham = $ghiChu[$cot];
			$product->save();
		}
		return redirect()->route('dashboard')->with(['flash_level'=>'success','flash_message'=>'Thêm đơn hàng mới thành công']);
	}
}
