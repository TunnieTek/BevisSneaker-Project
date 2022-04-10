<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // public $product = 'product';
    public $table = 'product';
    protected $fillable = ['productid','productname','price','size','color','images','category','description'];
    protected $primaryKey = 'productid';
    public $timestamps = false;
    public $incrementing = false;
    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'string';

}

