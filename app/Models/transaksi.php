<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $table = 'tb_transaksi';

    protected $primaryKey = 'id_transaksi';

    protected $fillable = [
        'id_transaksi',
        'tanggal',
        'quantity',
        'subtotal',
        'id_user',
        'id_printer',
        'id_customer',
        'status_transaksi'
    ];
}
