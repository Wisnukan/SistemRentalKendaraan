<?php

use App\Http\Controllers\CustomersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DriversController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PesananDriversController;
use App\Http\Controllers\TransaksiController;
use App\Models\Customers;
use App\Models\Drivers;
use App\Models\Kendaraan;
use App\Models\Pesanan;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


// admin punya
// Route::get('/dashboard-admin', function () {
//     return view('admin.pages.dashboard', [
//         'pendapatan' => Transaksi::sum('jumlah_pembayaran'),
//         'user' => User::count('id'),
//         'pesanan' => Pesanan::count('id'),
//         'kendaraan' => Kendaraan::count('id')
//     ]);
// })->middleware('auth');

Route::resource('/data-kendaraan', KendaraanController::class)->middleware('auth');
Route::resource('/data-pengguna', UsersController::class)->middleware('auth');
Route::resource('/data-kategori', KategoriController::class)->middleware('auth');
Route::resource('/data-customers', CustomersController::class)->middleware('auth');
Route::resource('/data-drivers', DriversController::class)->middleware('auth');
Route::resource('/data-pesanan', PesananController::class)->middleware('auth');
Route::resource('/data-transaksi', TransaksiController::class)->middleware('auth');
Route::post('/data-profile/{id}', [UsersController::class, 'profile']);
Route::get('/data-verifikasi/{id}', [PesananController::class, 'verifikasiData']);
Route::resource('/data-feedback', FeedbackController::class);
Route::get('/profile', function () {
    if(Auth::user()->role == 'admin') {
        return view('admin.pages.profile', [
            'users' => Customers::find(Auth::user()->id)
        ]);
    } else {
        return view('owner.pages.profile', [
            'users' => Customers::find(Auth::user()->id)
        ]);
    }
});

// routes/get login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [LoginController::class, 'register'])->middleware('guest');
Route::post('/register', [LoginController::class, 'store']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/driver', [DriversController::class, 'register']);
Route::get('/driver-main', [DriversController::class, 'index']);


// driver
Route::resource('/pesanan', PesananDriversController::class)->middleware('auth');
Route::post('/pesanan-accept/{id}', [PesananDriversController::class, 'accept']);
Route::post('/pesanan-reject/{id}', [PesananDriversController::class, 'reject']);

Route::get('/dashboard-driver', function () {
    if (Drivers::where('user_id', Auth::user()->id)->first()) {
        return view('drivers.pages.dashboard', [
            'driver' => Drivers::all(),
            'userId' => Drivers::where('user_id', Auth::user()->id)->first()
        ]);
    } else {
        return view('drivers.pages.profile_driver', [
            'driver' => Drivers::where('user_id', Auth::user()->id)->first(),
            'userId' => Drivers::where('user_id', Auth::user()->id)->first()
        ]);
    }
})->middleware('auth');

// get
Route::get('/profile-drivers', function () {
    return view('drivers.pages.profile_driver', [
        'driver' => Drivers::where('user_id', Auth::user()->id)->first(),
        'userId' => Drivers::where('user_id', Auth::user()->id)->first()
    ]);
})->middleware('auth');

// Route::get('/dashboard-driver', function() {
//     return view('drivers.pages.dashboard', [
//         'driver' => Drivers::all(),
//         'userId' => Drivers::where('user_id', Auth::user()->id)->first()
//     ]);
// })->middleware('auth');

// Customers
Route::get('/customers', [CustomersController::class, 'dashboardCust'])->middleware('auth');

Route::get('/dasboard-customers', function () {
    if (Customers::where('user_id', Auth::user()->id)->first()) {
        return view('customers.pages.dashboard', [
            'kendaraan' => Kendaraan::all(),
            'userId' => Customers::where('user_id', Auth::user()->id)->first()
        ]);
    } else {
        return view('customers.pages.profile_customers', [
            'customers' => Customers::where('user_id', Auth::user()->id)->first(),
            'userId' => Customers::where('user_id', Auth::user()->id)->first()
        ]);
    }
})->middleware('auth');

Route::get('/profile-customers', function () {
    return view('customers.pages.profile_customers', [
        'customers' => Customers::where('user_id', Auth::user()->id)->first(),
        'userId' => Customers::where('user_id', Auth::user()->id)->first()
    ]);
})->middleware('auth');

Route::get('/dashboard-customers', function () {
    return view('customers.pages.dashboard', [
        'kendaraan' => Kendaraan::all(),
        'userId' => Customers::where('user_id', Auth::user()->id)->first()
    ]);
})->middleware('auth');

Route::get('/form-pesanan/{id}', [CustomersController::class, 'tambahPesanan']);
Route::get('/pesanan-saya', [CustomersController::class, 'lihatPesanan']);
Route::post('/pembayaran', [TransaksiController::class, 'bayarPesanan']);
Route::get('/detailPesanan/{id}', [PesananController::class, 'detailPesanan']);