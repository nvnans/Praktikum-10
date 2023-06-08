<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    //hubungkan dengan tabel produk
    protected $table = 'produk';

    //matiin timestamps
    public $timestamps = false;

    //tentukan kolom yang bisa diisi
    protected $fillable = [
        'kode', 'nama', 'harga_jual', 'harga_beli', 'stok', 'min_stok', 'deskripsi', 'kategori_produk_id',
    ];

    public function kategori_produk() {
        return $this->belongsTO(KategoriProduk::class);
    }
}
