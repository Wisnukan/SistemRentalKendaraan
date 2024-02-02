@extends('admin.main')

@section('content')
<div class="kategori" data-flash="{{ session('flash') }}"></div>
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
                    Id</th>
                  <th
                    class="px-3 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Logo</th>
                  <th
                    class="px-3 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Kode</th>
                  <th
                    class="px-3 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Merk</th>
                  <th
                    class="px-3 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Jumlah</th>
                  <th
                    class="px-3 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Jenis</th>
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
                @foreach ($kategori as $k)
                <tr>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <div class="flex px-2 py-1">
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-0 text-sm leading-normal">{{ $k->id }}</h6>
                      </div>
                    </div>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <div>
                      @if ($k->logo)
                        <img src="{{ asset('storage/' . $k->logo) }}"
                        class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl"
                        alt="user1" />
                      @else
                        <img src="../assets/img/logohonda.png"
                        class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl"
                        alt="user1" />
                      @endif
                    </div>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 text-xs font-semibold leading-tight ml-1">{{ $k->kode }}</p>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 text-xs font-semibold leading-tight ml-1">{{ $k->merk }}</p>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 text-xs font-semibold leading-tight ml-5">{{ $k->jumlah }}</p>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 text-xs font-semibold leading-tight">{{ $k->jenis }}</p>
                  </td>
                  
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <button type="button" class="text-xs font-semibold leading-tight text-slate-400 editKategori" value="{{ $k->id }}"> Edit </button>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <button type="button" class="text-xs font-semibold leading-tight text-slate-400 viewKategori" value="{{ $k->id }}"> Lihat </button>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <form action="/data-kategori/" method="post" class="hapusKategori">
                      @csrf
                      @method('delete')
                      <button class="text-xs font-semibold leading-tight text-slate-400 tombol-hapus-kategori" type="submit" value="{{ $k->id }}">Hapus</button>
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
  <a fixed-plugin-button class="bottom-7.5 right-7.5 text-xl z-990 shadow-soft-lg rounded-circle fixed cursor-pointer bg-white px-4 py-2 text-slate-700" data-bs-toggle="modal" data-bs-target="#modalKategori" id="tambahKategori">
    <i class="py-2 pointer-events-none fa fa-plus"></i>
  </a>
</div>

<!-- Modal -->
<div class="modal fade" id="modalKategori" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 judulModal" id="judulModal">Tambah Data Kategori</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/data-kategori" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" id="id-kategori">
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                  <label for="kode" class="form-label">Kode</label>
                  <input type="text" class="form-control rounded border-slate-200 rounded border-slate-200" id="kode-kategori" name="kode" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                  <label for="merk" class="form-label">Merk</label>
                  <input type="text" class="form-control rounded border-slate-200" id="merk-kategori" name="merk" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" class="form-control rounded border-slate-200 rounded border-slate-200" id="jumlah-kategori" name="jumlah" required>
            </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label for="jenis" class="form-label">Jenis</label>
                <select class="form-select" id="jenis-kategori" name="jenis" required>
                    <option value="Roda 4">Roda 4</option>
                    <option value="Roda 2">Roda 2</option>
                </select>
              </div>
            </div>
          </div><hr>
          <div class="row">
            <div class="col-lg-8 mt-3">
              <label class="form-label" for="logo">Upload file</label>
              <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="logo" type="file" name="logo" onchange="priviewLogo()">
            </div>
            <div class="col-lg-4 mt-3">
              <img src="" alt="" class="priview-logo img-fluid mb-3 col-sm-10">
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

<!-- Modal -->
<div class="modal fade" id="ubahKategoriModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 judulModal" id="judulModal">Ubah Data Kategori</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formKategori" method="post" enctype="multipart/form-data">
          @csrf
          @method('put')
          <input type="hidden" name="id" id="id-ubah">
          <input type="hidden" name="oldLogo" id="oldLogo">
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                  <label for="kode" class="form-label">Kode</label>
                  <input type="text" class="form-control rounded border-slate-200 rounded border-slate-200" id="kode-ubah" name="kode" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                  <label for="merk" class="form-label">Merk</label>
                  <input type="text" class="form-control rounded border-slate-200" id="merk-ubah" name="merk" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" class="form-control rounded border-slate-200 rounded border-slate-200" id="jumlah-ubah" name="jumlah" required>
            </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label for="jenis" class="form-label">Jenis</label>
                <select class="form-select" id="jenis-ubah" name="jenis" required>
                    <option value="Roda 4">Roda 4</option>
                    <option value="Roda 2">Roda 2</option>
                </select>
              </div>
            </div>
          </div><hr>
          <div class="row">
            <div class="col-lg-8 mt-3">
              <label class="form-label" for="logo">Upload file</label>
              <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="logo" type="file" name="logo" onchange="priviewLogoUbah()">
            </div>
            <div class="col-lg-4 mt-3">
              <img id="logo-ubah" class="priview-logo-ubah img-fluid mb-3 col-sm-10">
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
<div class="modal fade" id="viewKategori" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 judulModal" id="judulModal">Detail Kategori</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row pb-3">
          <div class="col-sm d-flex align-items-center justify-content-center">
            <img id="logo-view" alt="" class="priview-logo img-fluid mb-3 col-sm-5">
          </div>
          <hr>
        </div>
        <div class="row">
          <div class="col-sm-4">Kode</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-6">
            <input for="kode-view" id="kode-view"></input>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">Merk</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-6">
            <input for="merk-view" id="merk-view"></input>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">Jumlah</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-6">
            <input for="jumlah-view" id="jumlah-view"></input>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">Jenis</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-6">
            <input for="jenis-view" id="jenis-view"></input>
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