@extends('customers.main')

@section('content')
<div class="bayarPesanan" data-transaksi="{{ session('bayarTransaksi') }}"></div>
<div class="selesai" data-statuspsn="{{ session('selesai') }}"></div>
<div class="feedback" data-feedback="{{ session('feedback') }}"></div>
<div class="editBerhasil" data-editpesanan="{{ session('editPesananSaya') }}"></div>
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
                  {{-- <th
                    class="px-3 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    #</th>
                  <th
                    class="px-3 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Kode</th> --}}
                  <th
                    class="px-3 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Tanggal Ambil</th>
                  <th
                    class="px-3 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Tanggal Kembali</th>
                  <th
                    class="px-3 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Status</th>
                  <th
                    class="px-3 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Driver</th>
                  <th
                    class="px-3 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Kendaraan</th>
                    <th
                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                  </th>
                </tr>
              </thead>

              <tbody>
                @foreach ($pesanans as $pesanan)
                {{-- @dd($pesanan->kendaraan) --}}
                <tr>
                  {{-- <td class="px-3 py-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <div class="flex px-2 py-1">
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-0 text-sm leading-normal">{{ $pesanan->id }}</h6>
                      </div>
                    </div>
                  </td>
                  <td class="px-3 py-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 text-xs font-semibold text-center leading-tight">{{ $pesanan->kode }}</p>
                  </td> --}}
                  <td class="px-3 py-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 text-xs text-center font-semibold leading-tight">{{ $pesanan->tgl_ambil }}</p>
                  </td>
                  <td class="px-3 py-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 text-xs font-semibold leading-tight">{{ $pesanan->tgl_kembali }}</p>
                  </td>

                  @if ($pesanan->status == 'menunggu_konfirmasi')
                  <td class="text-sm leading-normal text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <span class="bg-gradient-to-tl from-yellow-400 to-yellow-500 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $pesanan->status }}</span>
                  </td>
                  @endif

                  @if ($pesanan->status == 'terkonfirmasi')
                  <td class="text-sm leading-normal text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <span class="bg-gradient-to-tl from-green-400 to-green-500 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $pesanan->status }}</span>
                  </td>
                  @endif

                  @if ($pesanan->status == 'ditolak')
                  <td class="text-sm leading-normal text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <span class="bg-gradient-to-tl from-red-400 to-red-500 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $pesanan->status }}</span>
                  </td>
                  @endif

                  @if ($pesanan->status == 'selesai')
                  <td class="text-sm leading-normal text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <span class="bg-gradient-to-tl from-sky-400 to-blue-500 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $pesanan->status }}</span>
                  </td>
                  @endif

                  @if ($pesanan->status == 'berlangsung')
                  <td class="text-sm text-center leading-normal bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <span class="bg-gradient-to-tl from-teal-400 to-teal-500 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $pesanan->status }}</span>
                  </td>
                  @endif

                  @if ($pesanan->status == 'menunggu_admin')
                  <td class="text-sm text-center leading-normal bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <span class="bg-gradient-to-tl from-purple-400 to-purple-500 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $pesanan->status }}</span>
                  </td>
                  @endif

                  @if ($pesanan->drivers != null)
                    <td class="px-3 py-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                      <p class="mb-0 text-xs font-semibold leading-tight">{{ $pesanan->drivers->nama }}</p>
                    </td>
                  @else
                    <td class="px-3 py-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                      <p class="mb-0 text-xs font-semibold leading-tight">Tanpa Pengemudi</p>
                    </td>
                  @endif
                  
                  <td class="px-3 py-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 text-xs font-semibold leading-tight">{{ $pesanan->kendaraan->nama }}</p>
                  </td>

                  @if ($pesanan->status == 'menunggu_konfirmasi')
                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <button class="bg-zinc-400 text-white active:bg-zinc-600 font-bold uppercase text-xs px-4 py-2 rounded-full shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 ubahPesanan" type="button" value="{{ $pesanan->id }}">
                        Edit</button>
                    </td>
                  @endif

                  @if ($pesanan->status == 'terkonfirmasi')
                    <td class="px-3 py-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <button class="bg-red-500 text-white active:bg-red-600 font-bold uppercase text-xs px-4 py-2 rounded-full shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 pesananLihat" type="button" value="{{ $pesanan->id }}">
                        Bayar Pesanan</button>
                    </td>
                  @endif

                  @if ($pesanan->status == 'menunggu_admin')
                    <td class="px-3 py-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                      <button disabled type="button" class="py-2.5 px-5 me-2 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 inline-flex items-center">
                        <svg aria-hidden="true" role="status" class="inline w-4 h-4 me-3 text-gray-200 animate-spin dark:text-gray-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="#1C64F2"/>
                        </svg>
                        Loading...
                        </button>
                    </td>
                  @endif

                  @if ($pesanan->status == 'ditolak')
                    <td class="px-3 py-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <button class="bg-green-500 text-white active:bg-green-600 font-bold uppercase text-xs px-4 py-2 rounded-full shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                        <a href="/dashboard-customers">Buat Ulang Pesanan</a>
                        </button>
                    </td>
                  @endif

                  @if ($pesanan->status == 'selesai')
                    <td class="px-3 py-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <button class="bg-amber-300 text-white active:bg-yellow-300 font-bold uppercase text-xs px-4 py-2 rounded-full shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 ulasanPesanan" type="button" value="{{ $pesanan->id }}">Berikan Ulasan?</button>
                    </td>
                  @endif

                  @if ($pesanan->status == 'berlangsung')
                    <td class="px-3 py-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <button class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-xs px-4 py-2 rounded-full shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 detailPesanan" type="button" value="{{ $pesanan->id }}">
                        Detail</button>
                    </td>
                  @endif
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
           
            <input type="hidden" name="id" id="id-ubah">
            <input type="hidden" name="kode" id="kode-pesanan-ubah">
              <div class="row">
                {{-- <div class="col">
                  <div class="mb-3">
                      <label for="kode" class="form-label">Kode</label>
                      <input type="text" class="form-control rounded border-slate-200 rounded border-slate-200" id="kode-pesanan-ubah" name="kode" required>
                  </div>
                </div> --}}
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
                      <label for="driver" class="form-label">Pengemudi</label>
                      <select class="form-select" id="pengemudi-ubah" name="driver_id" required>
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
            <button type="submit" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save changes</button>
          </form>
        </div>
      </div>
    </div>
  </div>

<!-- Card View -->
<div class="modal fade" id="detailPesanan" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
      <form action="/detailPesanan/" method="get" class="formDetail" enctype="multipart/form-data">
          @csrf
          <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5 judulModal" id="judulModal">Detail Pesanan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row mb-4">
                    <p style="font-weight: bold">Saat ini anda sedang berada dalam masa sewa kendaraan!</p>
                    <i style="font-style: italic">*tandai sebagai selesai jika anda sudah melakukan pengembalian kendaraan</i>
                </div>
                <hr>
                <div class="row my-4">
                  <div class="col-sm-4">Nomor Kode</div>
                  <div class="col-sm-1">:</div>
                  <div class="col-sm-6 text-right">
                    <input for="kode-pesanan-customers" id="kode-pesanan-customers"></input>
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-sm-4">Status</div>
                  <div class="col-sm-1">:</div>
                  <div class="col-sm-6 text-right">
                    <input name="status" for="status" id="status"></input>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 btnSelesai">Selesai</button>
                <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900 cetakPDF">Cetak</button>
                <button type="button" class="block text-white bg-neutral-400 hover:bg-neutral-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
      </form>
    </div>
</div> 

<!-- Card View -->
<div class="modal fade ulsn" id="ulasanPesanan" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
      <form action="/data-feedback" method="post" class="formFeedback" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="pesanan_id" id="pesanan_id">
          <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5 judulModal" id="judulModal">Ulasan Pesanan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row mb-4">
                    <p style="font-weight: bold">Mohon berikan ulasan/feedback dengan jujur!</p>
                    <i style="font-style: italic">*feedback dari anda sangat membantu kami kedepannya</i>
                </div>
                <hr>
                <div class="row my-4">
                  <div class="col-sm-4 ml-2">Rating</div>
                  <div class="col-sm-1">:</div>
                  <div class="col-sm-6">
                    <input name="penilaian" class="ml-2 px-2" value="1" type="radio" for="kode-pesanan-customers" id="kode-pesanan-customers"> 1</input>
                    <input name="penilaian" class="ml-2 px-2" value="2" type="radio" for="kode-pesanan-customers" id="kode-pesanan-customers"> 2</input>
                    <input name="penilaian" class="ml-2 px-2" value="3" type="radio" for="kode-pesanan-customers" id="kode-pesanan-customers"> 3</input>
                    <input name="penilaian" class="ml-2 px-2" value="4" type="radio" for="kode-pesanan-customers" id="kode-pesanan-customers"> 4</input>
                    <input name="penilaian" class="ml-2 px-2" value="5" type="radio" for="kode-pesanan-customers" id="kode-pesanan-customers"> 5</input>
                  </div>
                </div>
                <textarea name="ulasan" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tuliskan pesan anda disini"></textarea>

              </div>
              <div class="modal-footer">
                <button type="submit" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 btnSimpan">Unggah</button>
                <button type="button" class="block text-white bg-neutral-400 hover:bg-neutral-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
      </form>
    </div>
  </div> 

<!-- Card View -->
<div class="modal fade" id="pesananSaya" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <form action="/data-transaksi" method="post" name="formBayar" enctype="multipart/form-data">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5 judulModal" id="judulModal">Konfirmasi Pembayaran</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row mb-4">
                  <p style="font-weight: bold">Lakukan pembayaran dan tunggu konfirmasi dari admin!</p>
                  <i style="font-style: italic">*admin akan melakukan konfirmasi dalam 24jam kedepan setelah pembayaran</i>
              </div>
              <hr>
              <div class="row my-4">
                <div class="col-sm-4">Kode</div>
                <div class="col-sm-1">:</div>
                <div class="col-sm-6 text-right">
                  <input name="kode" for="kode-transaksi" id="kode-transaksi"></input>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-sm-4">Total Bayar</div>
                <div class="col-sm-1">:</div>
                <div class="col-sm-6 text-right">
                  <input name="total" for="total_bayar" id="total_bayar"></input>
                </div>
              </div>
              <div class="row mt-2">
                  <div class="col-sm-4">
                      <img src="../img/bni.png" alt="" width="100px">
                  </div>
                  <div class="col">
                      <p class="pt-8 text-3xl font-bold">6032 9828 1244 0281</p>
                  </div>
              </div>
              <div class="row">
                  <div class="col">
                      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Bukti Transaksi</label>
                  <input name="bukti" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                  </div>            
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Upload Transaksi</button>
              <button type="button" class="block text-white bg-neutral-400 hover:bg-neutral-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
    </form>
  </div>
</div> 

@endsection