<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class size extends Model
{

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    use HasFactory;
    protected $table = 'size';
    protected $fillable = ['sizename', 'sizedescription'];
    protected $primaryKey = 'sizename';
    public $timestamps = false;
    protected $connection = 'size';
}
