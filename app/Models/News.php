<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = ['newsid', 'username', 'heading','author','paraphase','images'];
    protected $table = 'news';
    protected $primaryKey = 'newsid';
    public $timestamps = false;
}
