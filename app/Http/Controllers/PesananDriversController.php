<?php

namespace App\Http\Controllers;

use App\Models\PesananDrivers;
use Illuminate\Http\Request;
use App\Models\Drivers;
use App\Models\Customers;
use App\Models\Kendaraan;
use App\Models\Pesanan;
use Illuminate\Support\Facades\Auth;

class PesananDriversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('drivers.pages.pesanancust', [
            'userId' => Drivers::where('user_id', Auth::user()->id)->first(),
            'pesanans' => Pesanan::where('driver_id', Auth::user()->id)->orderBy('id', 'desc')->get(),
            'customers' => Customers::all(),
            'kendaraan' => Kendaraan::all(),
            'drivers' => Drivers::where('user_id', Auth::user()->id)->get(),
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
    public function accept($id)
    {
        Pesanan::where('id', $id)->update(['status' => 'terkonfirmasi']);
        return redirect('/pesanan')->with('konfirmasi', 'Diterima!');
    }
    public function reject($id)
    {
        Pesanan::where('id', $id)->update(['status' => 'ditolak']);
        return redirect('/pesanan')->with('konfirmasi', 'Ditolak!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PesananDrivers  $pesananDrivers
     * @return \Illuminate\Http\Response
     */
    public function show(PesananDrivers $pesananDrivers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PesananDrivers  $pesananDrivers
     * @return \Illuminate\Http\Response
     */
    public function edit(PesananDrivers $pesananDrivers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PesananDrivers  $pesananDrivers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PesananDrivers $pesananDrivers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PesananDrivers  $pesananDrivers
     * @return \Illuminate\Http\Response
     */
    public function destroy(PesananDrivers $pesananDrivers)
    {
        //
    }
}
