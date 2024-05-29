<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use App\Models\Produk;

class FrontController extends Controller
{
    public function index()
    {
        $merk = Merk::all();
        $produk = Produk::latest()->get();
        return view('welcome', compact('produk', 'merk'));
    }

    public function produk()
    {
        $merk = Merk::all();
        $produk = Produk::latest()->get();
        return view('produk', compact('produk', 'merk'));
    }

    public function about()
    {
        return view('about');
    }

    public function detailProduk($id)
    {
        $produk = Produk::findOrFail($id);
        return view('detail_produk', compact('produk'));
    }
}
