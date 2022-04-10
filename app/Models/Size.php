<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class size extends Model
{

    public function detail()
    {
        return $this->belongsToMany(detail::class);
    }

    use HasFactory;
    protected $table = 'size';
    protected $fillable = ['sizename', 'sizedescription'];
    protected $primaryKey = 'sizename';
    public $timestamps = false;
    // protected $connection = 'size';
}
