<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
    	'code',
        'user_id',
        'status',
    	'total_money',
    ];
    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'username');
    }

    public function orderDetails(){
        return $this->hasMany(OrderDetail::class);
    }
}
