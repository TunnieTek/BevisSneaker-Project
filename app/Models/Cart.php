<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $fillable = ['username', 'productid'];
    protected $primaryKey = 'cartid';
    public $timestamps = false;

    public function detail()
    {
        return $this->belongsToMany(Detail::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function order()
    {
        return $this->belongsToMany(Order::class);
    }

    // protected $connection = 'cart';
}
