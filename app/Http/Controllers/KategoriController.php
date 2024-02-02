<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Http\Requests\StoreKategoriRequest;
use App\Http\Requests\UpdateKategoriRequest;
use Illuminate\Support\Facades\Storage;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.pages.data-kategori', [
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
     * @param  \App\Http\Requests\StoreKategoriRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKategoriRequest $request)
    {
        //
        $validatedData = $request->validate([
            'kode' => ['required', 'min:3', 'max:255', 'unique:kategoris'],
            'merk' => 'required',
            'jumlah' => 'required',
            'jenis' => 'required',
            'logo' => 'image|file'
        ]);

        if ($request->file('logo')) {
            # code...
            $validatedData['logo'] = $request->file('logo')->store('foto-sistem');
        }

        Kategori::create($validatedData);
        return redirect('/data-kategori')->with('flash', 'Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori, $id)
    {
        //
        $kategori = Kategori::find($id);
        return response()->json([
            'status' => 200,
            'kategori' => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKategoriRequest  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKategoriRequest $request, Kategori $kategori)
    {
        //
        $validatedData = $request->validate([
            'kode' => ['required', 'min:3', 'max:255'],
            'merk' => 'required',
            'jumlah' => 'required',
            'jenis' => 'required',
            'logo' => 'image|file'
        ]);

        if ($request->file('logo')) {
            # code...
            if ($request->oldLogo) {
                # code...
                Storage::delete($request->oldLogo);
            }
            $validatedData['logo'] = $request->file('logo')->store('foto-sistem');
        }

        Kategori::where('id', $request->id)->update($validatedData);
        return redirect('/data-kategori')->with('flash', 'Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori, $id)
    {
        //
        // Menghapus foto kendaraan dari penyimpanan jika ada
        if ($kategori->logo) {
            Storage::delete($kategori->logo);
        }

        // Menghapus entri kategori dari database
        $kategori->findOrFail($id)->delete();

        // Redirect ke halaman data-kategori setelah penghapusan
        return redirect('/data-kategori')->with('flash', 'Dihapus!');
    }
}
