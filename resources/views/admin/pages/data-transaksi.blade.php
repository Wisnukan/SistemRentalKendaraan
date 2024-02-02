@extends('admin.main')

@section('content')
<div class="transaksi" data-transaksi="{{ session('flash') }}"></div>
<div class="w-full px-6 py-6 mx-auto">
  <div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
      <div
        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex-auto px-0 pt-0 pb-2">
          <div class="p-0 overflow-x-auto">
            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
              <thead class="align-bottom">
                <tr>
                  <th
                    class="px-3 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    #</th>
                  <th
                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Kode</th>
                  <th
                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Jumlah Pembayaran</th>
                  <th
                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Status</th>
                <th
                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Tanggal Transaksi</th>
                  <th
                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Kode Pesanan</th>
                  <th
                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Nama Pemesan</th>
                    <th
                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                  </th>
                  <th
                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                  </th>
                  <th
                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                  </th>
                </tr>
              </thead>

              <tbody>
                @foreach ($transaksi as $t)
                <tr>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <div class="flex px-2 py-1">
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-0 text-sm leading-normal">{{ $t->id }}</h6>
                      </div>
                    </div>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 text-xs font-semibold leading-tight">{{ $t->kode }}</p>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 text-xs font-semibold leading-tight text-truncate" style="max-width: 300px;">{{ $t->jumlah_pembayaran }}</p>
                  </td>
                  @if ($t->status == 'selesai')
                  <td
                    class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <span
                      class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Selesai</span>
                  </td>
                  @endif
                  @if ($t->status == 'menunggu')
                  <td
                    class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <span
                      class="bg-gradient-to-tl from-red-800 to-red-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Menunggu</span>
                  </td>
                  @endif
                  <td class="px-6 py-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 text-xs font-semibold leading-tight">{{ $t->tanggal }}</p>
                  </td>
                  <td class="px-6 py-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 text-xs font-semibold leading-tight">{{ $t->pesanan->kode }}</p>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 text-xs font-semibold leading-tight">{{ $t->pesanan->customers->nama }}</p>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <button type="button" class="text-xs font-semibold leading-tight text-slate-400 ubahTransaksi" value="{{ $t->id }}"> Edit </button>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <button type="button" class="text-xs font-semibold leading-tight text-slate-400 viewTransaksi" value="{{ $t->id }}"> Lihat </button>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <form action="/data-transaksi/" method="post" class="hapusTransaksi">
                      @csrf
                      @method('delete')
                      <button class="text-xs font-semibold leading-tight text-slate-400 tombol-hapus-transaksi" type="submit" value="{{ $t->id }}">Hapus</button>
                    </form>                  
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalTransaksiUbah" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 judulModal" id="judulModal">Ubah Data Transaksi</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formUbahTransaksi" method="post" enctype="multipart/form-data">
          @csrf
          @method('put')
          <input type="hidden" name="id" id="id-ubah">
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="kode" class="form-label">Kode</label>
                        <input type="text" class="form-control rounded border-slate-200 rounded border-slate-200" id="kode-ubah" name="kode" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="jumlah_pembayaran" class="form-label">Jumlah Pembayaran</label>
                        <input type="text" class="form-control rounded border-slate-200" id="jumlah_pembayaran-ubah" name="jumlah_pembayaran" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status-ubah" name="status" required>
                            <option value="selesai">Selesai</option>
                            <option value="menunggu">Menunggu</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="datetime-local" class="form-control rounded border-slate-200" id="tanggal-ubah" name="tanggal" required>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="kode_pesanan" class="form-label">Kode Pesanan</label>
                <input type="text" class="form-control rounded border-slate-200" id="kode-pesanan-ubah" name="kode_pesanan" required disabled>
            </div>
            <div class="mb-3">
                <label for="nama-pemesan" class="form-label">Nama Pemesan</label>
                <input type="datetime" class="form-control rounded border-slate-200" id="nama-pemesan-ubah" name="nama-pemesan" required disabled>
            </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="block text-white bg-cyan-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 tombol-aksi">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Card View -->
<div class="modal fade" id="viewTransaksis" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 judulModal" id="judulModal">Detail Transaksi</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-5">Kode</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-5">
            <input for="kode-lihat" id="kode-lihat"></input>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-5">Jumlah Pembayaran</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-5">
            <input for="jumlah-lihat" id="jumlah-lihat"></input>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-5">Status</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-5">
            <input for="status-lihat" id="status-lihat"></input>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-5">Tanggal</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-5">
            <input for="tgl-lihat" id="tgl-lihat"></input>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-5">Kode Pesanan</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-5">
            <input for="kode-pesanan-lihat" id="kode-pesanan-lihat"></input>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-5">Nama Pemesan</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-5">
            <input for="nama-pemesan-lihat" id="nama-pemesan-lihat"></input>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="block text-white bg-cyan-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection