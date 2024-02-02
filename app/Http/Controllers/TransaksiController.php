<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Http\Requests\StoreTransaksiRequest;
use App\Http\Requests\UpdateTransaksiRequest;
use App\Models\Customers;
use App\Models\Pesanan;
use App\Models\User;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role == 'admin')
        {
            return view('admin.pages.data-transaksi', [
                'transaksi' => Transaksi::all(),
                'pesanan' => Pesanan::all()
            ]);
        } else {
            return view('owner.pages.data-transaksi', [
                'transaksi' => Transaksi::all(),
                'pesanan' => Pesanan::all()
            ]);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTransaksiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransaksiRequest $request)
    {
        //
        $validatedData = [
            'tanggal' => now(),
            'bukti' => $request->file('bukti')->store('foto-sistem'),
            'status' => 'selesai'
        ];

        Transaksi::where('kode', $request->kode)
            ->update($validatedData);
        Pesanan::where('kode', $request->kode)
            ->update(['status' => 'menunggu_admin']);
        return redirect('/pesanan-saya')->with('bayarTransaksi', 'Dibayar!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi, $id, Pesanan $pesanan, Customers $customers)
    {
        //
        $dataTransaksi = $transaksi::find($id);
        $dataPesanan = $pesanan::find($dataTransaksi->pesanan_id);
        $dataCustomers = $customers::find($dataPesanan->customer_id);
        return response()->json([
            'status' => 200,
            'transaksi' => $transaksi::find($id),
            'pesanan' => $dataPesanan,
            'customers' => $dataCustomers
        ]);
    }

    public function bayarPesanan(Request $request)
    {
        //
        dd($request);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransaksiRequest  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransaksiRequest $request, Transaksi $transaksi)
    {
        //
        $validatedData = $request->validate([
            'kode' => ['required', 'min:3', 'max:255'],
            'jumlah_pembayaran' => 'required|min:5|max:255',
            'status' => 'required',
            'tanggal' => 'required'
        ]);

        Transaksi::where('id', $request->id)
            ->update($validatedData);
        return redirect('/data-transaksi')->with('flash', 'Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi, $id)
    {
        //
        $transaksi->findOrFail($id)->delete();

        // Redirect ke halaman data-kendaraan setelah penghapusan
        return redirect('/data-transaksi')->with('flash', 'Dihapus!');
    }

    // public function view_pdf()
    // {
    //     // Periksa apakah autoload.php tersedia
    //     $autoloadFile = base_path('vendor/autoload.php');
    //     if (!file_exists($autoloadFile)) {
    //         die('Composer autoload file not found. Please run "composer install".');
    //     }

    //     // Muat autoload.php
    //     require_once $autoloadFile;

    //     // Jika ingin menampilkan pesan kesalahan
    //     error_reporting(E_ALL);
    //     ini_set('display_errors', 1);

    //     // Buat objek Mpdf dan buat PDF
    //     $mpdf = new \Mpdf\Mpdf();
    //     $mpdf->WriteHTML('<h1>Hello world!</h1>');

    //     // Tampilkan PDF di browser
    //     $mpdf->Output();
    // }


}
