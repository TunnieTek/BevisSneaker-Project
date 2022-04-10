<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasMany(User::class);
    }


    protected $table = 'role';
    protected $fillable = ['rolename', 'roledescription'];
    protected $primaryKey = 'rolename';
    public $timestamps = false;
    // protected  $connection = 'role';

}
