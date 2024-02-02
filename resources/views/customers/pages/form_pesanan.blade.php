@extends('customers.main')

@section('content')
 
<div class="flex-none w-full max-w-full px-3 mt-3">
      <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border mx-6">
        <div class="w-full px-6 py-6">
            <form action="/data-pesanan" method="post">
                @csrf
                <input type="hidden" value="{{ Auth::user()->id }}" name="customer_id">
                <input type="hidden" value="P{{ $kode_pesanan }}" name="kode">
                <input type="hidden" value="{{ $data->id }}" name="kendaraan_id">
                <input type="hidden" value="1" name="form_pesanan">
                <div class="row">
                    <div class="col">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Kode Pesanan
                          </label>
                          <input name="kode" value="{{ $kode_pesanan }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="{{ $kode_pesanan }}" disabled>
                    </div>
                    <div class="col">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                            Nama
                          </label>
                          <input name="nama" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="{{ $data->nama }}" disabled>
                    </div>
                    <div class="col">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Tahun
                          </label>
                          <input name="tahun" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" placeholder="{{ $data->tahun }}" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Harga
                          </label>
                          <input name="harga" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="{{ $data->harga_paket }}" disabled>
                    </div>
                    <div class="col">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                            Deskripsi
                          </label>
                          <input name="deskripsi" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="{{ $data->deskripsi }}" disabled>
                    </div>
                    <div class="col">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Nomor Plat
                          </label>
                          <input name="kendaraan_id" value="{{ $data->id }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="{{ $data->nomor_plat }}" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Tanggal Ambil
                          </label>
                          <input name="tgl_ambil" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="date" placeholder="{{ $data->transmisi }}">
                    </div>
                    <div class="col-lg-4">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Tangal Kembali
                          </label>
                          <input name="tgl_kembali" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="date" placeholder="{{ $data->transmisi }}">
                    </div>
                    <div class="col-lg-4">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Transmisi
                          </label>
                          <input name="transmisi" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" placeholder="{{ $data->transmisi }}" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                            Pilih Pengemudi
                          </label>
                          <div class="relative">
                            <select name="driver_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                              <option>Pilih Pengemudi</option>
                              <option value="0">Tanpa Pengemudi</option>
                              @foreach ($drivers as $pengemudi)
                                <option value="{{ $pengemudi->id }}">{{ $pengemudi->nama }}</option>
                              @endforeach
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                          </div>
                    </div>
                    <div class="col" rowspan="2">
                        <img src="../img/pict4.png" alt="" class="priview-logo img-fluid mb-3 ml-8 pl-8 col-sm-8">
                        <input type="hidden" value="kendaraan.png">
                    </div>
                </div>
                <div class="row mt-6">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                        Pesan
                      </button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>

@endsection