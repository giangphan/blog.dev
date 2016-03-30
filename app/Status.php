<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Status
 *
 * @property integer $id
 * @property string $ten
 * @property integer $nhom
 * @method static \Illuminate\Database\Query\Builder|\App\Status whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Status whereTen($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Status whereNhom($value)
 * @mixin \Eloquent
 */
class Status extends Model
{
    //
    protected $table = "statuses";

    protected $fillable = ['id', 'ten', 'nhom'];
    
    public $timestamps = false;
}
