<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class printer extends Model
{
    use HasFactory;
    protected $table = 'tb_printer';
    public $timestamps = false;

    protected $primaryKey = 'id_printer';

    protected $fillable = [
        'id_printer',
        'nama_printer',
        'spesifikasi',
        'harga',
        'stok',
        'image_name'
    ];
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_printer');
    }
}
