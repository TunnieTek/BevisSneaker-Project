<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $fillable = ['orderid', 'date','total'];
    protected $primaryKey = 'orderid';
    public $timestamps = false;
    protected $connection = 'order';

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
}
