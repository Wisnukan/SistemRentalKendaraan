<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    public function kendaraan()
    {
        return $this->hasMany(Kendaraan::class);
    }

    protected $fillable = ['kode', 'merk', 'jumlah', 'jenis', 'logo'];
}
