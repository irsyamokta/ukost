<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailProduk;

class ProductController extends Controller
{
    public function index()
    {
        return view('layouts.product.product');
    }

    public function detail() {
        $detailProduk = DetailProduk::where('id_produk', '1')->get();
        return view('layouts.product.product', ['detailProduk' => $detailProduk]);
    }
}
