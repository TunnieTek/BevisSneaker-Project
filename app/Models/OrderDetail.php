<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
    	'order_id',
    	'product_id',
    	'amount',
    	'price',
        'total_money',
    ];
    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'productid');
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
