<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\user as Authenticatable;


class users extends Authenticatable
{
    use HasFactory;

    protected $table='tb_user';
    protected $primarykey='user_id';

    protected $fillable=['name' ,'username', 'password'];
}

