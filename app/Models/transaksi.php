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
        'jumlah',
        'subtotal',
        'status_transaksi',
        'id_user',
        'id_printer',
        'id_customer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function printer()
    {
        return $this->belongsTo(Printer::class, 'id_printer');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer');
    }
}
