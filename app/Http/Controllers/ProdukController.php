<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\ProdukModel;

class ProdukController extends Controller
{

    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'id_produk' => 'required',
    //         'nama_produk' => 'required',
    //         'harga_produk' => 'required',
    //         'deskripsi_produk' => 'required'
    //     ]);

    //     $post = DB::create([
    //         'id_produk' => $request->id_produk,
    //         'nama_produk' => $request->nama_produk,
    //         'deskripsi_produk' => $request->deskripsi_produk,
    //         'harga_produk' => $request->harga_produk,
    //         'produk_image' => $request->produk_image,
    //         'produk_status' => "1",
    //     ]);

    //     if ($post) {
    //         return redirect()
    //             ->route('produk.index')
    //             ->with([
    //                 'success' => 'Produk berhasil di input'
    //             ]);
    //     } else {
    //         return redirect()
    //             ->back()
    //             ->withInput()
    //             ->with([
    //                 'error' => 'Error, Produk gagal di input'
    //             ]);
    //     }
    // }

    public function showproduk()
    {
        return view('produk');
    }

    public function tambahproduk()
    {
        return view('tambahproduk');
    }

    public function simpanproduk(Request $request)
    {
        $produk = ProdukModel::create([
            'nama_produk' => $request->nama_produk,
            'harga_produk' => $request->harga_produk,
            'deskripsi_produk' => $request->deskripsi_produk,
        ]);

        return redirect()->route('produk');
    }

}
