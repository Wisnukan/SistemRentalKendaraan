<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Encryption\DecryptException;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class UsersController extends Controller
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

        $pengguna = DB::table('users')
            ->when($searchTerm, function ($query) use ($searchTerm) {
                return $query->where('username', 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere('id', 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere('role', 'LIKE', '%' . $searchTerm . '%');
            })
            ->paginate(7);

        return view('admin.pages.data-pengguna', compact('pengguna'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'password' => 'required|min:5|max:255',
            'role' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect('/data-pengguna')->with('flash', 'Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, $id)
    {
        //
        $pengguna = $user::find($id);
        return response()->json([
            'status' => 200,
            'pengguna' => $pengguna
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $validatedData = $request->validate([
            'username' => ['required', 'min:3', 'max:255'],
            'password' => 'required|min:5|max:255',
            'role' => 'required'
        ]);

        if (Hash::needsRehash($validatedData['password'])) {
            # code...
            $validatedData['password'] = Hash::make($validatedData['password']);
        }

        User::where('id', $request->id)
            ->update($validatedData);
        if ($request->path() == 'profile') {
            return redirect('/profile')->with('flash', 'Diubah!');
        } else {
            return redirect('/data-pengguna')->with('flash', 'Diubah!');
        }
    }

    public function profile(Request $request, User $user)
    {
        //
        $validatedData = $request->validate([
            'username' => ['required', 'min:3', 'max:255'],
            'password' => 'required|min:5|max:255',
            'role' => 'required'
        ]);

        if (Hash::needsRehash($validatedData['password'])) {
            # code...
            $validatedData['password'] = Hash::make($validatedData['password']);
        }

        User::where('id', $request->id)
            ->update($validatedData);
        return redirect('/profile')->with('flash', 'Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, $id)
    {
        //
        $user->findOrFail($id)->delete();

        // Redirect ke halaman data-kendaraan setelah penghapusan
        return redirect('/data-pengguna')->with('flash', 'Dihapus!');
    }
}
