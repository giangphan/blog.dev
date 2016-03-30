<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Customer;

/**
 * App\Order
 *
 * @property integer $id
 * @property string $maDonHang
 * @property integer $maKhachHang
 * @property string $diaChi
 * @property string $ngayDat
 * @property string $ngayGiao
 * @property integer $tongTien
 * @property integer $thanhToan
 * @property string $ghiChuDonHang
 * @property integer $tinhTrangDonHang
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $product
 * @property-read \App\Customer $customer
 * @property-read \App\Status $status
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereMaDonHang($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereMaKhachHang($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereDiaChi($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereNgayDat($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereNgayGiao($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereTongTien($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereThanhToan($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereGhiChuDonHang($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereTinhTrangDonHang($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Order extends Model
{
    //
    protected $table = "orders";

    protected $fillable = ['id', 'maDonHang', 'maKhachHang', 'diaChi', 'ngayDat', 'ngayGiao', 'tongTien', 'thanhToan', 'ghiChuDonHang', 'tinhTrangDonHang'];
    
    public $timestamps = true;

    public function product() {
    	return $this->hasMany('App\Product','donHang');
    }

    public function customer() {
    	return $this->hasOne('App\Customer', 'id', 'maKhachHang');
    }

    public function status(){
    	return $this->hasOne('App\Status','id','tinhTrangDonHang');
    }
}
