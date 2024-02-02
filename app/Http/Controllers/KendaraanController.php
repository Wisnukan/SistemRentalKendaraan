<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Http\Requests\StoreKendaraanRequest;
use App\Http\Requests\UpdateKendaraanRequest;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.data-kendaraan', [
            'kendaraan' => Kendaraan::all(),
            'kategori' => Kategori::all()
        ]);
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
     * @param  \App\Http\Requests\StoreKendaraanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKendaraanRequest $request)
    {
        //
        $validatedData = $request->validate([
            'nomor_plat' => 'required',
            'nama' => 'required',
            'tahun' => 'required',
            'status' => 'required',
            'harga_perjam' => 'required',
            'harga_paket' => 'required',
            'deskripsi' => 'required',
            'transmisi' => 'required',
            'foto_kendaraan' => 'image|file',
            'kategori_id' => 'required'
        ]);

        if ($request->file('foto_kendaraan')) {
            # code...
            $validatedData['foto_kendaraan'] = $request->file('foto_kendaraan')->store('foto-sistem');
        }

        Kendaraan::create($validatedData);
        return redirect('/data-kendaraan')->with('flash', 'Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function show(Kendaraan $kendaraan)
    {
        //
        return view('admin.pages.data-kendaraan', [
            'kendaraan' => $kendaraan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kendaraan $kendaraan, $id)
    {
        // 
        $kendaraan = Kendaraan::find($id);
        $kategori = Kategori::find($kendaraan->kategori_id);
        return response()->json([
            'status' => 200,
            'kendaraan' => $kendaraan,
            'kategori' => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKendaraanRequest  $request
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKendaraanRequest $request, Kendaraan $kendaraan)
    {
        //
        $validatedData = $request->validate([
            'nomor_plat' => 'required',
            'nama' => 'required',
            'tahun' => 'required',
            'status' => 'required',
            'harga_perjam' => 'required',
            'harga_paket' => 'required',
            'deskripsi' => 'required',
            'transmisi' => 'required',
            'foto_kendaraan' => 'image|file',
            'kategori_id' => 'required'
        ]);

        if ($request->file('foto_kendaraan')) {
            # code...
            if ($request->oldImage) {
                # code...
                Storage::delete($request->oldImage);
            }
            $validatedData['foto_kendaraan'] = $request->file('foto_kendaraan')->store('foto-sistem');
        }

        Kendaraan::where('id', $request->id)
            ->update($validatedData);
        return redirect('/data-kendaraan')->with('flash', 'Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kendaraan $kendaraan, $id)
    {
        // Menghapus foto kendaraan dari penyimpanan jika ada
        if ($kendaraan->foto_kendaraan) {
            Storage::delete($kendaraan->foto_kendaraan);
        }

        // Menghapus entri kendaraan dari database
        $kendaraan->findOrFail($id)->delete();

        // Redirect ke halaman data-kendaraan setelah penghapusan
        return redirect('/data-kendaraan')->with('flash', 'Dihapus!');
    }
}
