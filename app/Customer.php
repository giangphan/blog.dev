<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

/**
 * App\Customer
 *
 * @property integer $id
 * @property string $tenKhachHang
 * @property string $soDienThoai
 * @property-read \App\Order $order
 * @method static \Illuminate\Database\Query\Builder|\App\Customer whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Customer whereTenKhachHang($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Customer whereSoDienThoai($value)
 * @mixin \Eloquent
 */
class Customer extends Model
{
    //
    protected $table = "customers";

    protected $fillable = ['id', 'tenKhachHang', 'soDienThoai'];
    
    public $timestamps = false;

    public function order() {
    	return $this->belongsTo('App\Order', 'maKhachHang');
    }
}
