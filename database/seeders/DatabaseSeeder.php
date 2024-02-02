<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Customers;
use App\Models\Kategori;
use App\Models\Kendaraan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(4)->create();

        // Customers::factory(4)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'username' => 'Wisnu Mahesa',
        //     'password' => 'wisnu123',
        //     'role' => 'admin'
        // ]);
        Kategori::create([
            'kode' => 'KMB1',
            'merk' => 'Honda',
            'jumlah' => '12',
            'jenis' => 'Roda 4',
        ]);
        Kategori::create([
            'kode' => 'KMB2',
            'merk' => 'Suzuki',
            'jumlah' => '12',
            'jenis' => 'Roda 4',
        ]);
        Kategori::create([
            'kode' => 'KMB3',
            'merk' => 'Toyota',
            'jumlah' => '12',
            'jenis' => 'Roda 4',
        ]);

        Kendaraan::create([
            'nomor_plat' => 'DK 2121 BR',
            'nama' => 'Xenia',
            'tahun' => '2021',
            'status' => 'tersedia',
            'harga_perjam' => '115.000',
            'harga_paket' => '99.000',
            'deskripsi' => 'Xenia dengan transmisi manual tahun 2021 surat + pajak on',
            'transmisi' => 'manual',
            'foto_kendaraan' => 'logohonda.png',
            'kategori_id' => '1',
        ]);
        Kendaraan::create([
            'nomor_plat' => 'DK 2233 BR',
            'nama' => 'Alpard',
            'tahun' => '2021',
            'status' => 'tersedia',
            'harga_perjam' => '200.000',
            'harga_paket' => '150.000',
            'deskripsi' => 'Alpard dengan transmisi matic tahun 2021 surat + pajak on',
            'transmisi' => 'matic',
            'foto_kendaraan' => 'logohonda.png',
            'kategori_id' => '3',
        ]);
        Kendaraan::create([
            'nomor_plat' => 'DK 5656 BR',
            'nama' => 'Jazz',
            'tahun' => '2021',
            'status' => 'tersedia',
            'harga_perjam' => '99.000',
            'harga_paket' => '80.000',
            'deskripsi' => 'Jazz dengan transmisi manual tahun 2021 surat + pajak on',
            'transmisi' => 'manual',
            'foto_kendaraan' => 'logohonda.png',
            'kategori_id' => '1',
        ]);
    }
}
