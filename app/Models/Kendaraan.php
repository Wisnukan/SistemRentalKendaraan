<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function pesanan()
    {
        return $this->hasOne(Pesanan::class);
    }

    protected $fillable = ['nomor_plat', 'nama', 'tahun', 'status', 'harga_perjam', 'harga_paket', 'deskripsi', 'transmisi', 'foto_kendaraan', 'kategori_id'];
}
