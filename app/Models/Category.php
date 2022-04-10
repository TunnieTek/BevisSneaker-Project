<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    public function product()
    {
        return $this->hasMany(Product::Class);
    }
    protected $table = 'category';
    protected $fillable = ['category', 'description'];
    protected $primaryKey = 'categoryid';
    public $timestamps = false;
    // protected $connection = 'category';
}
