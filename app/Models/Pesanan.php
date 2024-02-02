<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Driver\Driver;

class Pesanan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function customers()
    {
        return $this->belongsTo(Customers::class, 'customer_id');
    }

    public function drivers()
    {
        return $this->belongsTo(Drivers::class, 'driver_id');
    }

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'kendaraan_id');
    }

    public function transaksi()
    {
        return $this->hasOne(Transaksi::class);
    }

    public function feedback()
    {
        return $this->hasOne(Feedback::class);
    }
}
