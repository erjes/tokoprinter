<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class printer extends Model
{
    use HasFactory;
    protected $table = 'tb_printer';

    protected $primaryKey = 'id_printer';

    protected $fillable = [
        'id_transaksi',
        'nama_printer',
        'spesifikasi',
        'harga',
        'stok',
    ];
}
