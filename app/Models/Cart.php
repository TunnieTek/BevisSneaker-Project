<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bill;
use App\Models\Product;
use App\Models\User;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $fillable = ['cartid','username','product','quantity','size'];
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
