<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;

class KategoriProdukController extends Controller
{
    public function index()
    {
        //return view('admin.produk.produk');
        $kategoriproduk = KategoriProduk::select('kategori_produk.nama')
        ->get();

        return view('admin.produk.kategori', compact('kategoriproduk'));
    }
}
