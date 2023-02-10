<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class landingpage extends Controller
{
    public function index()
    {
        $produk = produk::all();
        return view('landingpage.buy',['produk'=> $produk]);
    }
}
