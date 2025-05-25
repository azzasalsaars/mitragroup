<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $table = 'penjualans'; 

    protected $fillable = [
    'tanggal_transaksi',
    'kode_produk',
    'nama_produk',
    'jumlah',
    'harga',
    'pembayaran',
    'sisa_stok',
    'produk',
    'kategori', // Tambahkan ini
];
    public $timestamps = false; // karena kamu tidak pakai created_at dan updated_at
}
