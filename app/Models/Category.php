<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    public $table = 'category';
    protected $fillable = ['cateid','catename','catedescription'];
    protected $primaryKey = 'cateid';
    public $timestamps = false;
    public $incrementing = false;
    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'string';
}
