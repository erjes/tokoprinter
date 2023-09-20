<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;

    protected $table = 'tb_user';

    protected $primaryKey = 'tb_user';

    protected $fillable = [
        'id_user',
        'username',
        'password',
        'role'
    ];
}
