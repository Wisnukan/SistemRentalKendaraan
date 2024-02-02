@extends('customers.main')

@section('content')

<div class="pesananSaya" data-pesanan="{{ session('pesanan') }}"></div>
<section class="flex justify-center items-center bg-gray-50 mt-8 gap-6 overflow-hidden">
    <div class="bg-white shadow-md hover:scale-105 duration-300">
        <a href="">
            <img class="object-cover mt-8" src="../img/pict2.png" alt="">
        </a>
        <div class="px-4 py-3 w-72">
            <div class="flex items-center gap-2 mb-3 mt-2">
                <span class="px-3 py-1 rounded-full text-xs bg-gray-100">stock ready</span>
                <span class="px-3 py-1 rounded-full text-xs bg-gray-100">most recommend</span>
            </div>
            <span class="text-gray-400 uppercase text-sm">
                BRAND
            </span>
            <p class="text-lg font-bold block truncate capitalize">Mazda CX-3</p>
            <div class="flex items-center">
                <p class="text-lg font-semibold my-3">$150</p>
                <del>
                    <p class="text-sm text-gray-600 ml-2">$179</p>
                </del>
            </div>
            <div class="mt-4 flex gap-2">
                <button class="btn-product">Book Now</button>
                <p class="stock">4 Stock</p>
            </div>
        </div>
    </div>
    <div class="bg-white shadow-md hover:scale-105 duration-300">
        <a href="">
            <img class="object-cover mt-8" src="../img/pict2.png" alt="">
        </a>
        <div class="px-4 py-3 w-72">
            <div class="flex items-center gap-2 mb-3 mt-2">
                <span class="px-3 py-1 rounded-full text-xs bg-gray-100">stock ready</span>
                <span class="px-3 py-1 rounded-full text-xs bg-gray-100">most recommend</span>
            </div>
            <span class="text-gray-400 uppercase text-sm">
                BRAND
            </span>
            <p class="text-lg font-bold block truncate capitalize">Kijang Innova</p>
            <div class="flex items-center">
                <p class="text-lg font-semibold my-3">$150</p>
                <del>
                    <p class="text-sm text-gray-600 ml-2">$179</p>
                </del>
            </div>
            <div class="mt-4 flex gap-2">
                <button class="btn-product">Book Now</button>
                <p class="stock">4 Stock</p>
            </div>
        </div>
    </div>
    <div class="bg-white shadow-md hover:scale-105 duration-300">
        <a href="">
            <img class="object-cover mt-8" src="../img/civic.png" alt="">
        </a>
        <div class="px-4 py-3 w-72">
            <div class="flex items-center gap-2 mb-3 mt-2">
                <span class="px-3 py-1 rounded-full text-xs bg-gray-100">stock ready</span>
                <span class="px-3 py-1 rounded-full text-xs bg-gray-100">most recommend</span>
            </div>
            <span class="text-gray-400 uppercase text-sm">
                BRAND
            </span>
            <p class="text-lg font-bold block truncate capitalize">Civic</p>
            <div class="flex items-center">
                <p class="text-lg font-semibold my-3">$150</p>
                <del>
                    <p class="text-sm text-gray-600 ml-2">$179</p>
                </del>
            </div>
            <div class="mt-4 flex gap-2">
                <button class="btn-product">Book Now</button>
                <p class="stock">4 Stock</p>
            </div>
        </div>
    </div>
    <div class="bg-white shadow-md hover:scale-105 duration-300">
        <a href="">
            <img class="object-cover mt-8" src="../img/pict2.png" alt="">
        </a>
        <div class="px-4 py-3 w-72">
            <div class="flex items-center gap-2 mb-3 mt-2">
                <span class="px-3 py-1 rounded-full text-xs bg-gray-100">stock ready</span>
                <span class="px-3 py-1 rounded-full text-xs bg-gray-100">most recommend</span>
            </div>
            <span class="text-gray-400 uppercase text-sm">
                BRAND
            </span>
            <p class="text-lg font-bold block truncate capitalize">Supra</p>
            <div class="flex items-center">
                <p class="text-lg font-semibold my-3">$150</p>
                <del>
                    <p class="text-sm text-gray-600 ml-2">$179</p>
                </del>
            </div>
            <div class="mt-4 flex gap-2">
                <button class="btn-product">Book Now</button>
                <p class="stock">4 Stock</p>
            </div>
        </div>
    </div>
</section>
<section class="flex flex-wrap justify-center bg-gray-50 mt-8 gap-6 overflow-hidden" id="specialdeals">
    @foreach ($kendaraan as $mobil)
    <form class="formPesanan" action="form-pesanan/" method="get">
        @csrf
        <div class="bg-white shadow-md hover:scale-105 duration-300">
            <img class="object-cover pt-8" src="../img/pict1.png" alt="All New Avanza">
            <div class="px-4 py-3 w-72">
                <div class="flex items-center gap-2 mb-3 mt-2">
                    <span class="px-3 py-1 rounded-full text-xs bg-gray-100">stock ready</span>
                    <span class="px-3 py-1 rounded-full text-xs bg-gray-100">most recommend</span>
                </div>
                <span class="text-gray-400 uppercase text-sm">
                    BRAND TERBAIK
                </span>
                <h2 class="text-lg font-bold block truncate capitalize">{{ $mobil->nama }}</h2>
                <div class="flex items-center">
                    <p class="text-lg font-semibold my-3">Rp {{ $mobil->harga_paket }}</p>
                    <del>
                        <p class="text-sm text-gray-600 ml-2">Rp {{ $mobil->harga_perjam }}</p>
                    </del>
                </div>
                <div class="mt-4 flex gap-2">
                    <button value="{{ $mobil->id }}" class="btn-product tambahPesanan">Book Now</button>
                    <p class="stock">4 Stock</p>
                </div>
            </div>
        </div>
    </form>
    @endforeach
</section>

@endsection