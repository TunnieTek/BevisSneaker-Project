<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    public $table = 'detail';
    protected $fillable = ['id','product','size'];
    protected $primaryKey = 'id';

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }

    public function size()
    {
        return $this->belongsToMany(Size::class);
    }

    public function cart()
    {
        return $this->belongsToMany(Cart::class);
    }
}
