<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

/**
 * App\Product
 *
 * @property integer $id
 * @property integer $donHang
 * @property string $sanPham
 * @property integer $soLuong
 * @property string $tinhTrangSanPham
 * @property string $ghiChuSanPham
 * @property-read \App\Order $order
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereDonHang($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereSanPham($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereSoLuong($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereTinhTrangSanPham($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereGhiChuSanPham($value)
 * @mixin \Eloquent
 */
class Product extends Model
{
    //
    protected $table = "products";

    protected $fillable = ['id', 'donHang', 'sanPham', 'soLuong', 'tinhTrangSanPham', 'ghiChuSanPham'];
    
    public $timestamps = false;

    public function order() {
    	return $this->belongsTo('App\Order','id');
    }
}
