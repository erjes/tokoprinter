<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $table = 'tb_customer';

    protected $primaryKey = 'id_customer'; // Kolom yang digunakan sebagai primary key

    protected $fillable = [
        'id_customer',
        'nama_customer',
        'alamat_customer',
        'kontak_customer',
        'id_user',
    ];

    // Definisikan relasi jika diperlukan
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
