@extends('admin.main')

@section('content')
<div class="pesanan" data-pesanan="{{ session('flash') }}"></div>
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
                    Driver</th>
                  <th
                    class="px-3 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Kendaraan</th>
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
                @foreach ($pesanans as $pesanan)
                {{-- @dd($pesanan->kendaraan) --}}
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
                  @if ($pesanan->drivers)
                    <td class="px-3 py-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                      <p class="mb-0 text-xs font-semibold leading-tight">{{ $pesanan->drivers->nama }}</p>
                    </td>
                  @else
                    <td class="px-3 py-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                      <p class="mb-0 text-xs font-semibold leading-tight">Tanpa Pengemudi</p>
                    </td>
                  @endif
                  <td class="px-3 py-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 text-xs font-semibold leading-tight">{{ $pesanan->kendaraan->id }}</p>
                  </td>
                  
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <button type="button" class="text-xs font-semibold leading-tight text-slate-400 ubahPesanan" value="{{ $pesanan->id }}"> Edit </button>
                  </td>
                  <td class="px-3 py-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <button type="button" class="text-xs font-semibold leading-tight text-slate-400 viewPesanan" value="{{ $pesanan->id }}"> Lihat </button>
                  </td>
                  <td class="px-3 py-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <form action="/data-pesanan/" method="post" class="hapusPesanan">
                      @csrf
                      @method('delete')
                      <button class="text-xs font-semibold leading-tight text-slate-400 tombol-hapus-pesanan" type="submit" value="{{ $pesanan->id }}">Hapus</button>
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

<div fixed-plugin>
  <a fixed-plugin-button class="bottom-7.5 right-7.5 text-xl z-990 shadow-soft-lg rounded-circle fixed cursor-pointer bg-white px-4 py-2 text-slate-700" data-bs-toggle="modal" data-bs-target="#tambahPesanan">
    <i class="py-2 pointer-events-none fa fa-plus"></i>
  </a>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahPesanan" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 judulModal" id="judulModal">Tambah Data Pesanan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/data-pesanan" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" id="id-pesanan">
            <div class="row">
              <div class="col">
                <div class="mb-3">
                    <label for="kode" class="form-label">Kode</label>
                    <input type="text" class="form-control rounded border-slate-200 rounded border-slate-200" id="kode-pesanan" name="kode" required>
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                    <label for="tgl_ambil" class="form-label">Tanggal Ambil</label>
                    <input type="date" class="form-control rounded border-slate-200" id="tgl_ambil" name="tgl_ambil" required>
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                    <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
                    <input type="date" class="form-control rounded border-slate-200" id="tgl_kembali" name="tgl_kembali" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="mb-3">
                    <label for="pemesan" class="form-label">Pemesan</label>
                    <select class="form-select" id="pemesan" name="customer_id" required>
                      @foreach ($customers as $cust)
                        <option value="{{ $cust->id }}">{{ $cust->nama }}</option>
                      @endforeach
                    </select>
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                    <label for="driver" class="form-label">Pengemudi</label>
                    <select class="form-select" id="driver" name="driver_id" required>
                      @foreach ($drivers as $drive)
                        <option value="{{ $drive->id }}">{{ $drive->nama }}</option>
                      @endforeach
                    </select>
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                    <label for="kendaraan" class="form-label">Kendaraan</label>
                    <select class="form-select" id="kendaraan" name="kendaraan_id" required>
                      @foreach ($kendaraan as $k)
                        <option value="{{ $k->id }}">{{ $k->nama }}</option>
                      @endforeach
                    </select>
                </div>
              </div>
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

<!-- Modal -->
<div class="modal fade" id="modalPesananUbah" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 judulModal" id="judulModal">Ubah Data Pesanan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formUbahPesanan" method="post" enctype="multipart/form-data">
          @csrf
          @method('put')
          <input type="hidden" name="id" id="id-pesanan-ubah">
            <div class="row">
              <div class="col">
                <div class="mb-3">
                    <label for="kode" class="form-label">Kode</label>
                    <input type="text" class="form-control rounded border-slate-200 rounded border-slate-200" id="kode-pesanan-ubah" name="kode" required>
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                    <label for="tgl_ambil" class="form-label">Tanggal Ambil</label>
                    <input type="date" class="form-control rounded border-slate-200" id="tgl_ambil-ubah" name="tgl_ambil" required>
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                    <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
                    <input type="date" class="form-control rounded border-slate-200" id="tgl_kembali-ubah" name="tgl_kembali" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="mb-3">
                    <label for="pemesan" class="form-label">Pemesan</label>
                    <select class="form-select" id="pemesan-ubah" name="customer_id" required>
                      <option value="Pilih Customers"></option>
                      @foreach ($customers as $cust)
                        <option value="{{ $cust->id }}">{{ $cust->nama }}</option>
                      @endforeach
                    </select>
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                    <label for="driver" class="form-label">Pengemudi</label>
                    <select class="form-select" id="driver-ubah" name="driver_id" required>
                      <option value="Pilih Pengemudi">Pilih Pengemudi</option>
                      <option value="Tanpa Pengemudi">Tanpa Pengemudi</option>
                      @foreach ($drivers as $drive)
                        <option value="{{ $drive->id }}">{{ $drive->nama }}</option>
                      @endforeach
                    </select>
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                    <label for="kendaraan" class="form-label">Kendaraan</label>
                    <select class="form-select" id="kendaraan-ubah" name="kendaraan_id" required>
                      @foreach ($kendaraan as $k)
                        <option value="{{ $k->id }}">{{ $k->nama }}</option>
                      @endforeach
                    </select>
                </div>
              </div>
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
<div class="modal fade" id="viewPesanans" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <form class="formVerifikasi" action="data-verifikasi/" action="get">
      @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 judulModal" id="judulModal">Detail Pesanan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg d-flex align-items-center justify-content-center">
              <img id="foto-kendaraan-lihat" alt="" class="img-priview img-fluid mb-3 col-lg-7">
            </div>
            <hr><br>
          </div>
          <div class="row">
            <div class="col-sm-4">Kode</div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-6">
              <input for="kode-pesanan-lihat" id="kode-pesanan-lihat"></input>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">Tanggal Ambil</div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-6">
              <input for="tgl-ambil-lihat" id="tgl-ambil-lihat"></input>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">Tanggal Kembali</div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-6">
              <input for="tgl-kembali-lihat" id="tgl-kembali-lihat"></input>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">Pemesan</div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-6">
              <input for="pemesan-lihat" id="pemesan-lihat"></input>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">Pengemudi</div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-6">
              <input for="pengemudi-lihat" id="pengemudi-lihat"></input>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">Kendaraan</div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-6">
              <input for="kendaraan-lihat" id="kendaraan-lihat"></input>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">Nomor Plat</div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-6">
              <input for="nomor-plat-lihat" id="nomor-plat-lihat"></input>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 verifikasiData">Verifikasi</button>
          <button type="button" class="block text-white bg-cyan-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection