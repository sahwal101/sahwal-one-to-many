<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    // isi dari produk
    protected $fillable = ['nama', 'deskripsi', 'harga', 'image'];
    protected $visible = ['nama', 'deskripsi', 'harga', 'image'];

    public function merk()
    {
        return $this->belongsTo(Merk::class, 'id_merk');
    }
}
