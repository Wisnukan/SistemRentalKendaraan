@extends('admin.main')

@section('content')
<div class="customers" data-flash="{{ session('flash') }}"></div>
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
                    class="p-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Foto SIM</th>
                  <th
                    class="p-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Nama / NIK</th>
                  <th
                    class="p-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Telepon / Alamat</th>
                  <th
                    class="p-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Tanggal Lahir</th>
                  <th
                    class="p-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    User ID</th>
                  <th
                    class="p-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                  </th>
                  <th
                    class="p-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                  </th>
                  <th
                    class="p-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                  </th>
                </tr>
              </thead>

              <tbody>
                @foreach ($customers as $cust)
                <tr>
                  <td class="p3 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <div class="flex px-2 py-1 ml-6">
                      <div>
                        @if ($cust->foto_sim)
                          <img src="{{ asset('storage/' . $cust->foto_sim) }}"
                          class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl"
                          alt="user1" />
                        @else
                          <img src="../assets/img/logohonda.png"
                          class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl"
                          alt="user1" />
                        @endif
                      </div>
                    </div>
                  </td>
                  <td class="p3 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <h6 class="px-3 mb-0 text-sm leading-normal">{{ $cust->nama }}</h6>
                    <p class="px-3 mb-0 text-xs leading-tight text-slate-400">{{ $cust->nik }}</p>
                  </td>
                  <td class="p3 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <h6 class="px-3 mb-0 text-sm leading-normal">{{ $cust->alamat }}</h6>
                    <p class="px-3 mb-0 text-xs leading-tight text-slate-400">{{ $cust->telepon }}</p>
                  </td>
                  <td class="p-3 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <span class="text-xs font-semibold leading-tight text-slate-400">{{ $cust->tgl_lahir }}</span>
                  </td>
                  <td class="p-3 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <span class="text-xs font-semibold leading-tight text-slate-400">{{ $cust->user_id }}</span>
                  </td>
                  <td class="p-3 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <button type="button" class="text-xs font-semibold leading-tight text-slate-400 editCust" value="{{ $cust->id }}" data-bs-toggle="modal" data-bs-target="#editCust"> Edit </button>
                  </td>
                  <td class="p-3 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <button type="button" class="text-xs font-semibold leading-tight text-slate-400 viewCustomers" value="{{ $cust->id }}"> Lihat </button>
                  </td>
                  <td class="p-3 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <form action="/data-customers/" method="post" class="hapusCust">
                      @csrf
                      @method('delete')
                      <button class="text-xs font-semibold leading-tight text-slate-400 hapus-cust" type="submit" value="{{ $cust->id }}">Hapus</button>
                    </form>                  
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="d-flex justify-content-center mt-4 mb-4">
            {{ $customers->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div fixed-plugin>
  <a fixed-plugin-button class="bottom-7.5 right-7.5 text-xl z-990 shadow-soft-lg rounded-circle fixed cursor-pointer bg-white px-4 py-2 text-slate-700" data-bs-toggle="modal" data-bs-target="#modalData">
    <i class="py-2 pointer-events-none fa fa-plus"></i>
  </a>
</div>

<!-- Modal -->
<div class="modal fade" id="modalData" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 judulModal" id="judulModal">Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/data-customers" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id">
          <div class="row">
            <div class="col">
              <div class="mb-3">
                  <label for="nik" class="form-label">NIK</label>
                  <input type="text" class="form-control rounded border-slate-200 rounded border-slate-200" id="nik" name="nik" required>
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control rounded border-slate-200 rounded border-slate-200" id="nama" name="nama" required>
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                  <label for="telepon" class="form-label">Telepon</label>
                  <input type="number" class="form-control rounded border-slate-200 rounded border-slate-200" id="telepon" name="telepon" required>
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col">
                  <div class="mb-3">
                      <label for="alamat" class="form-label">Alamat</label>
                      <input type="text" class="form-control rounded border-slate-200" id="alamat" name="alamat" required>
                  </div>
              </div>
              <div class="col">
                  <div class="mb-3">
                      <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                      <input type="date" class="form-control rounded border-slate-200" id="tgl_lahir" name="tgl_lahir" required>
                  </div>
              </div>
              <div class="col">
                  <div class="mb-3">
                      <label for="user_id" class="form-label">User ID</label>
                      <select class="form-select" id="user_id" name="user_id" required>
                          @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->username }}</option>
                          @endforeach
                      </select>
                  </div>
              </div>
          </div>
          <div class="mb-3">
            <div class="row"><hr>
              <div class="col-lg-10 mt-4">
                <label class="form-label" for="foto_sim">Foto SIM</label>
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="foto_sim" type="file" name="foto_sim" onchange="priviewSIM()">
              </div>
              <div class="col-lg-2 mt-4">
                <img src="" alt="" class="priview-sim img-fluid col-sm-10">
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

<!-- Modal Ubah -->
<div class="modal fade" id="editCust" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 judulModal" id="judulModal">Ubah Data Customers</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formEditCust" method="post" enctype="multipart/form-data">
          @csrf
          @method('put')
          <input type="hidden" name="id" id="id-ubah">
          <input type="hidden" name="oldSIM" id="oldSIM" value="">
          <div class="row">
            <div class="col">
              <div class="mb-3">
                  <label for="nik" class="form-label">NIK</label>
                  <input type="text" class="form-control rounded border-slate-200 rounded border-slate-200" id="nik-ubah" name="nik" required>
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control rounded border-slate-200 rounded border-slate-200" id="nama-ubah" name="nama" required>
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                  <label for="telepon" class="form-label">Telepon</label>
                  <input type="number" class="form-control rounded border-slate-200 rounded border-slate-200" id="telepon-ubah" name="telepon" required>
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col">
                  <div class="mb-3">
                      <label for="alamat" class="form-label">Alamat</label>
                      <input type="text" class="form-control rounded border-slate-200" id="alamat-ubah" name="alamat" required>
                  </div>
              </div>
              <div class="col">
                  <div class="mb-3">
                      <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                      <input type="date" class="form-control rounded border-slate-200" id="tgl_lahir-ubah" name="tgl_lahir" required>
                  </div>
              </div>
              <div class="col">
                  <div class="mb-3">
                      <label for="user_id" class="form-label">User ID</label>
                      <select class="form-select" id="user_id-ubah" name="user_id" required>
                          @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->username }}</option>
                          @endforeach
                      </select>
                  </div>
              </div>
          </div>
          <div class="mb-3">
            <div class="row"><hr>
              <div class="col-lg-10 mt-4">
                <label class="form-label" for="foto_sim">Foto SIM</label>
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="foto_sim" type="file" name="foto_sim" onchange="priviewSIM()">
              </div>
              <div class="col-lg-2 mt-4">
                <img id="foto_sim-ubah" src="" alt="" class="priview-sim img-fluid col-sm-10">
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
<div class="modal fade" id="viewCustomers" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 judulModal" id="judulModal">Detail Customers</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg">
            <img id="foto_sim-view" alt="" class="priview-sim img-fluid mb-3 col-lg-12">
          </div>
        </div>
        <div class="row mb-1 mb-1">
          <div class="col-sm-4">NIK</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-6">
            <input for="nik-view" id="nik-view"></input>
          </div>
        </div>
        <div class="row mb-1">
          <div class="col-sm-4">Nama</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-6">
            <input for="nama-view" id="nama-view"></input>
          </div>
        </div>
        <div class="row mb-1">
          <div class="col-sm-4">Telepon</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-6">
            <input for="telepon-view" id="telepon-view"></input>
          </div>
        </div>
        <div class="row mb-1">
          <div class="col-sm-4">Alamat</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-6">
            <input for="alamat-view" id="alamat-view"></input>
          </div>
        </div>
        <div class="row mb-1">
          <div class="col-sm-4">Tanggal Lahir</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-6">
            <input for="tgl_lahir-view" id="tgl_lahir-view"></input>
          </div>
        </div>
        <div class="row mb-1">
          <div class="col-sm-4">User ID</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-6">
            <input for="user_id-view" id="user_id-view"></input>
          </div>
        </div>
        
      <div class="modal-footer">
        <button type="button" class="block text-white bg-cyan-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection