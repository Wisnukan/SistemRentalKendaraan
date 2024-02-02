<?php

namespace App\Http\Controllers;

use App\Models\Drivers;
use App\Models\User;
use App\Http\Requests\StoreDriversRequest;
use App\Http\Requests\UpdateDriversRequest;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Driver\Driver;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
class DriversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('admin.pages.data-drivers', [
            'drivers' => Drivers::all(),
            'users' => User::where('role', '=', 'drivers')->get(),
        ]);
    }

    public function register()
    {
        return view('drivers.pages.register');
    }

    // public function daftar(Request $request)
    // {
    //     ddd($request);
    // }

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
     * @param  \App\Http\Requests\StoreDriversRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDriversRequest $request)
    {
        //
        $validatedData = $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'user_id' => 'required',
            'foto_sim' => 'image|file'
        ]);

        if ($request->file('foto_sim')) {
            # code...
            $validatedData['foto_sim'] = $request->file('foto_sim')->store('foto-sistem');
        }

        Drivers::create($validatedData);
        if ($request->driver_tambah) {
            # code...
            return redirect('/dashboard-driver')->with('flash', 'Ditambahkan!');
        } else {
            return redirect('/data-driver')->with('flash', 'Ditambahkan!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Drivers  $drivers
     * @return \Illuminate\Http\Response
     */
    public function show(Drivers $drivers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Drivers  $drivers
     * @return \Illuminate\Http\Response
     */
    public function edit(Drivers $drivers, $id)
    {
        //
        $drivers = Drivers::find($id);
        $users = User::find($drivers->user_id);
        return response()->json([
            'status' => 200,
            'drivers' => $drivers,
            'users' => $users
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDriversRequest  $request
     * @param  \App\Models\Drivers  $drivers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDriversRequest $request, Drivers $drivers)
    {
        //
        $validatedData = $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'user_id' => 'required',
            'foto_sim' => 'image|file'
        ]);

        if ($request->file('foto_sim')) {
            # code...
            if ($request->oldSIMDriver) {
                # code...
                Storage::delete($request->oldSIMDriver);
            }
            $validatedData['foto_sim'] = $request->file('foto_sim')->store('foto-sistem');
        }

        Drivers::where('id', $request->id)
            ->update($validatedData);
            // ->update([$request]);      
        if (Auth::user()->role == 'drivers') {
            return redirect('/profile-drivers')->with('flash', 'Diubah!');
        } else {
            return redirect('/data-drivers')->with('flash', 'Diubah!');
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Drivers  $drivers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drivers $drivers, $id)
    {
        //
        if ($drivers->foto_sim) {
            Storage::delete($drivers->foto_sim);
        }

        // Menghapus entri kendaraan dari database
        $drivers->findOrFail($id)->delete();

        // Redirect ke halaman data-kendaraan setelah penghapusan
        return redirect('/data-drivers')->with('flash', 'Dihapus!');
    }
}
