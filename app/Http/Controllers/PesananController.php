<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Http\Requests\StorePesananRequest;
use App\Http\Requests\UpdatePesananRequest;
use App\Models\Customers;
use App\Models\Drivers;
use App\Models\Kendaraan;
use App\Models\Transaksi;
use SebastianBergmann\CodeCoverage\Driver\Driver;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
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
            return view('admin.pages.data-pesanan', [
                'pesanans' => Pesanan::where('status', 'menunggu_admin')->get(),
                'customers' => Customers::all(),
                'drivers' => Drivers::all(),
                'kendaraan' => Kendaraan::all()
            ]);
        } else {
            return view('owner.pages.data-pesanan', [
                'pesanans' => Pesanan::all(),
                'customers' => Customers::all(),
                'drivers' => Drivers::all(),
                'kendaraan' => Kendaraan::all()
            ]);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detailPesanan($id)
    {
        //
        Pesanan::where('id', $id)
            ->update(['status' => 'selesai']);
        return redirect('/pesanan-saya')->with('selesai', 'Selesai!');
    }

    public function verifikasiData($id)
    {
        //
        Pesanan::where('id', $id)
            ->update(['status' => 'berlangsung']);

        if (Auth::user()->role == 'admin') {
            return redirect('/data-pesanan')->with('flash', 'Diverifikasi!');
        } else {
            return redirect('/pesanan-saya')->with('selesai', 'Selesai!');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePesananRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePesananRequest $request)
    {
        //
        $validatedData = $request->validate([
            'kode' => 'required',
            'tgl_ambil' => 'required',
            'tgl_kembali' => 'required',
            'customer_id' => 'required',
            'driver_id' => 'required',
            'kendaraan_id' => 'required'
        ]);

        if ($validatedData['driver_id'] == '0') {
            $validatedData['status'] = 'terkonfirmasi';
        } else {
            $validatedData['status'] = 'menunggu_konfirmasi';
        }
        Pesanan::create($validatedData);

        // Tanggal mulai dan selesai
        $tanggalMulai = Carbon::parse($request->tgl_ambil);
        $tanggalSelesai = Carbon::parse($request->tgl_kembali);

        // Menghitung selisih hari
        $totalHari = $tanggalMulai->diffInDays($tanggalSelesai);
        $kendaraan = Kendaraan::where('id', $request->kendaraan_id)->first();
        $totalHarga = $totalHari * $kendaraan->harga_paket;
        $pesanan_id = Pesanan::where('kode', $validatedData['kode'])->first();

        $dataTransaksi = [
            'kode' => $validatedData['kode'],
            'jumlah_pembayaran' => $totalHarga,
            'status' => 'menunggu',
            'pesanan_id' => $pesanan_id->id
        ];

        Transaksi::create($dataTransaksi);

        if ($request->form_pesanan) {
            return redirect('/dasboard-customers')->with('pesanan', 'Dibuat!');
        } else {
            return redirect('/data-pesanan')->with('flash', 'Ditambahkan!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesanan $pesanan, $id)
    {
        //
        $pesanan = Pesanan::find($id);
        return response()->json([
            'status' => 200,
            'pesanan' => $pesanan,
            'customers' => Customers::find($pesanan->customer_id),
            'drivers' => Drivers::find($pesanan->driver_id),
            'kendaraan' => Kendaraan::find($pesanan->kendaraan_id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePesananRequest  $request
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePesananRequest $request, Pesanan $pesanan, $id)
    {
        //
        $validatedData = $request->validate([
            'kode' => 'required',
            'tgl_ambil' => 'required',
            'tgl_kembali' => 'required',
            'driver_id' => 'required',
            'kendaraan_id' => 'required'
        ]);
        $validateData['customer_id'] = Auth::user()->id;

        Pesanan::where('id', $id)->update($validatedData);
        if (Auth::user()->role == 'customers') {
            return redirect('/pesanan-saya')->with('editPesananSaya', 'Diubah!');
        } else {
            return redirect('/data-pesanan')->with('flash', 'Diubah!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesanan $pesanan, $id)
    {
        // Menghapus entri kategori dari database
        $pesanan->findOrFail($id)->delete();

        // Redirect ke halaman data-kategori setelah penghapusan
        return redirect('/data-pesanan')->with('flash', 'Dihapus!');;
    }
}
