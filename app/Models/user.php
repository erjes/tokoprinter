<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;

    protected $table = 'tb_user';

    protected $primaryKey = 'id_user';

    protected $fillable = [
        'id_user',
        'username',
        'password',
        'role'
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_user');
    }

    public function customer()
    {
        return $this->hasOne(Customer::class, 'id_user');
    }
}
