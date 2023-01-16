<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class DataprodukController extends Controller
{
    public function index()
    {
    $produk = DB::table('produk')->get();

    return view('index',['produk' => $produk]);
    }
}
