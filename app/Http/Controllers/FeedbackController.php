<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Http\Requests\StoreFeedbackRequest;
use App\Http\Requests\UpdateFeedbackRequest;
use App\Models\Customers;
use App\Models\Transaksi;
use App\Models\Pesanan;
use App\Models\User;
use App\Models\Kendaraan;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Auth::user()->role == 'admin') {
            return view('admin.pages.dashboard', [
                'feedback' => Feedback::paginate(4),
                'pesanan' => Pesanan::all(),
                'pendapatan' => Transaksi::sum('jumlah_pembayaran'),
                'user' => User::count('id'),
                'pesanan_total' => Pesanan::count('id'),
                'kendaraan' => Kendaraan::count('id'),
                'customers' => Customers::all()
            ]);
        } else {
            return view('owner.pages.dashboard', [
                'feedback' => Feedback::paginate(4),
                'pesanan' => Pesanan::all(),
                'pendapatan' => Transaksi::sum('jumlah_pembayaran'),
                'user' => User::count('id'),
                'pesanan_total' => Pesanan::count('id'),
                'kendaraan' => Kendaraan::count('id'),
                'customers' => Customers::all()
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
     * @param  \App\Http\Requests\StoreFeedbackRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFeedbackRequest $request)
    {
        //
        $validatedData = [
            'ulasan' => $request->ulasan,
            'penilaian' => $request->penilaian,
            'pesanan_id' => $request->pesanan_id
        ];

        Feedback::create($validatedData);
        return redirect('/pesanan-saya')->with('feedback', 'Berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedback $feedback, $id)
    {
        //
        $dataFeedback = $feedback::find($id);
        $dataPesanan = Pesanan::find($dataFeedback->pesanan_id);
        $dataCustomers = Customers::find($dataPesanan->customer_id);
        return response()->json([
            'status' => 200,
            'feedback' => $dataFeedback,
            'customers' => $dataCustomers
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFeedbackRequest  $request
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFeedbackRequest $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedback $feedback, $id)
    {
        //
        $feedback->findOrFail($id)->delete();

        // Redirect ke halaman data-kendaraan setelah penghapusan
        return redirect('/data-feedback')->with('flash', 'Dihapus!');;
    }
}
