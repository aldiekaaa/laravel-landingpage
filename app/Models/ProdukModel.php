<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukModel extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    protected $fillable = ['nama_produk', 'harga_produk', 'deskripsi_produk'];

}
