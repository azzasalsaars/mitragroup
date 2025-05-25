<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StokProduk extends Model
{
    protected $table = 'stok_produks'; 
    protected $fillable = [
        'kode_produk',
        'nama_produk',
        'stok',
        'harga',
        'kategori', 
    ];
}
