<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function size()
    {
        return $this->belongsTo(Size::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }



    use HasFactory;
    // public $product = 'product';
    public $table = 'product';
    protected $fillable = ['productid','productname','price','size','color','images','category','description'];
    protected $primaryKey = 'productid';
    public $timestamps = false;
    public $incrementing = false;
    protected $connection = 'product';
    // In Laravel 6.0+ make sure to also set $keyType


}

