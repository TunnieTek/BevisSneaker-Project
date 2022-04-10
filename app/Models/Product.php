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

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function detail()
    {
        return $this->belongsToMany(Detail::class);
    }





    use HasFactory;
    // public $product = 'product';
    public $table = 'product';
    protected $fillable = ['productid','productname','price','category','color','description','image','image2','image3','image4','image5'];
    protected $primaryKey = 'productid';
    public $timestamps = false;
    public $incrementing = false;
    // protected $connection = 'product';

    // In Laravel 6.0+ make sure to also set $keyType


}

