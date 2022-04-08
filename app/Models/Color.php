<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class color extends Model
{

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    use HasFactory;
    protected $table = 'color';
    protected $fillable = ['colorname', 'colordescription'];
    protected $primaryKey = 'colorname';
    public $timestamps = false;
    protected $connection = 'color';
}
