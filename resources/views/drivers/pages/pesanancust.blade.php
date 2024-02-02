@extends('drivers.main')

@section('content')
<div class="konfirmasi" data-konfirmasi="{{ session('konfirmasi') }}"></div>
<div class="w-full px-6 py-6 mx-auto">
  <div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
      <div
        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex-auto px-0 pt-0 pb-2">
          <div class="p-0 overflow-x-auto">
            <form action="pesanan-accept/" class="form-konfirmasi" method="post">
              @csrf
              <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                <thead class="align-bottom">
                  <tr>
                    <th
                      class="px-3 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                      #</th>
                    <th
                      class="px-3 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                      Kode</th>
                    <th
                      class="px-3 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                      Tanggal Ambil</th>
                    <th
                      class="px-3 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                      Tanggal Kembali</th>
                    <th
                      class="px-3 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                      Pemesan</th>
                    <th
                      class="px-3 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                      Kendaraan</th>
                    <th
                      class="pl-9 font-bold uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                      Status</th>
                  
                  </tr>
                </thead>
                <tbody>
                  @foreach ($pesanans as $pesanan)
                  {{-- @dd($pesanans) --}}
                  <input type="hidden" value="{{ $pesanan->id }}">
                  <tr>
                    <td class="px-3 py-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                      <div class="flex px-2 py-1">
                        <div class="flex flex-col justify-center">
                          <h6 class="mb-0 text-sm leading-normal">{{ $pesanan->id }}</h6>
                        </div>
                      </div>
                    </td>
                    <td class="px-3 py-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                      <p class="mb-0 text-xs font-semibold text-center leading-tight">{{ $pesanan->kode }}</p>
                    </td>
                    <td class="px-3 py-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                      <p class="mb-0 text-xs text-center font-semibold leading-tight">{{ $pesanan->tgl_ambil }}</p>
                    </td>
                    <td class="px-3 py-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                      <p class="mb-0 text-xs font-semibold leading-tight">{{ $pesanan->tgl_kembali }}</p>
                    </td>
                    <td class="px-3 py-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                      <p class="mb-0 text-xs font-semibold leading-tight">{{ $pesanan->customers->nama }}</p>
                    </td>
                    <td class="px-3 py-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                      <p class="mb-0 text-xs font-semibold leading-tight">{{ $pesanan->kendaraan->nama }}</p>
                    </td>

                    @if($pesanan->status == 'menunggu_konfirmasi')
                      <td class="align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <button type="button" class="text-xs font-semibold leading-tight text-slate-400 btn btn-danger tolak-pesanan" value="{{ $pesanan->id }}"> TOLAK </button>
                        <button type="button" class="bg-gradient-to-tl from-amber-300 to-yellow-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white terima-pesanan" value="{{ $pesanan->id }}"> TERIMA </button>
                      </td>
                      
                    @else
                      @if($pesanan->status == 'ditolak')
                        <td
                        class="text-sm leading-normal pl-6 bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <span
                          class="bg-gradient-to-tl from-red-500 to-red-800 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $pesanan->status }}</span>
                        </td>
                      @endif
                      @if($pesanan->status == 'terkonfirmasi')
                        <td
                        class="text-sm leading-normal pl-1 bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <span
                          class="bg-gradient-to-tl from-green-500 to-green-700 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $pesanan->status }}</span>
                        </td>
                      @endif
                      @if($pesanan->status == 'berlangsung')
                        <td
                        class="text-sm leading-normal pl-2 bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <span
                          class="bg-gradient-to-tl from-amber-300 to-yellow-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $pesanan->status }}</span>
                        </td>
                      @endif
                      @if($pesanan->status == 'selesai')
                        <td
                        class="text-sm leading-normal pl-7 bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <span
                          class="bg-gradient-to-tl from-sky-500 to-blue-600 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $pesanan->status }}</span>
                        </td>
                      @endif
                    @endif  
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection