<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table = 'bill';
    protected $fillable = ['orderid','cart','purchasedate','total'];
    protected $primaryKey = 'orderid';
    public $timestamps = false;
    // protected $connection = 'order';

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
}
