<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Http\Requests\StoreCustomersRequest;
use App\Http\Requests\UpdateCustomersRequest;
use App\Models\Drivers;
use App\Models\Kendaraan;
use App\Models\User;
use App\Models\Pesanan;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use SebastianBergmann\CodeCoverage\Driver\Driver;
use Illuminate\Support\Facades\Auth;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $searchTerm = request('search');

        $cust = DB::table('customers')
            ->when($searchTerm, function ($query) use ($searchTerm) {
                return $query->where('nama', 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere('nik', 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere('telepon', 'LIKE', '%' . $searchTerm . '%');
            })
            ->paginate(5);

        return view('admin.pages.data-customers', [
            'customers' => $cust,
            'users' => User::where('role', '!=', 'drivers')->get()
        ]);
    }

    public function dashboardCust()
    {
        //
        return view('customers.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lihatPesanan()
    {
        //
        return view('customers.pages.pesanan_saya', [
            'userId' => Auth::user()->id,
            'pesanans' => Pesanan::where('customer_id', Auth::user()->id)->get(),
            'drivers' => Drivers::all(),
            'customers' => Customers::all(),
            'kendaraan' => Kendaraan::all()
        ]);
    }

    public function tambahPesanan($id)
    {
        //
        return view('customers.pages.form_pesanan', [
            'data' => Kendaraan::where('id', $id)->first(),
            'drivers' => Drivers::all(),
            'userId' => Auth::user()->id,
            'kode_pesanan' => rand(1, 1000)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomersRequest $request)
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

        Customers::create($validatedData);

        if ($request->customers_tambah) {
            # code...
            return redirect('/dashboard-customers')->with('flash', 'Ditambahkan!');
        } else {
            return redirect('/data-customers')->with('flash', 'Ditambahkan!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function show(Customers $customers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function edit(Customers $customers, $id)
    {
        //
        $customers = Customers::find($id);
        $users = User::find($customers->user_id);
        return response()->json([
            'status' => 200,
            'customers' => $customers,
            'users' => $users
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomersRequest  $request
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomersRequest $request, Customers $customers)
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
            if ($request->oldSIM) {
                # code...
                Storage::delete($request->oldSIM);
            }
            $validatedData['foto_sim'] = $request->file('foto_sim')->store('foto-sistem');
        }

        Customers::where('id', $request->id)
            ->update($validatedData);

        if (Auth::user()->role == 'customers') {
            return redirect('/profile-customers')->with('flash', 'Diubah!');
        } else {
            return redirect('/data-customers')->with('flash', 'Diubah!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customers $customers, $id)
    {
        //
        if ($customers->foto_sim) {
            Storage::delete($customers->foto_sim);
        }

        // Menghapus entri kendaraan dari database
        $customers->findOrFail($id)->delete();

        // Redirect ke halaman data-kendaraan setelah penghapusan
        return redirect('/data-customers')->with('flash', 'Dihapus!');
    }
}
