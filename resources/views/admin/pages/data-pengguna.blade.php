@extends('admin.main')

@section('content')
<div class="pengguna" data-pengguna="{{ session('flash') }}"></div>
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
                    class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Id</th>
                  <th
                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Username</th>
                  <th
                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Password</th>
                  <th
                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Role</th>
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
                @foreach ($pengguna as $p)
                <tr>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <div class="flex px-2 py-1">
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-0 text-sm leading-normal">{{ $p->id }}</h6>
                      </div>
                    </div>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 text-xs font-semibold leading-tight">{{ $p->username }}</p>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 text-xs font-semibold leading-tight text-truncate" style="max-width: 300px;">{{ $p->password }}</p>
                  </td>
                  @if ($p->role == 'admin')
                  <td
                    class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <span
                      class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Admin</span>
                  </td>
                  @endif
                  @if ($p->role == 'customers')
                  <td
                    class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <span
                      class="bg-gradient-to-tl from-blue-700 to-sky-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Customers</span>
                  </td>
                  @endif
                  @if ($p->role == 'drivers')
                  <td
                    class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <span
                      class="bg-gradient-to-tl from-red-800 to-red-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Drivers</span>
                  </td>
                  @endif
                  @if ($p->role == 'owners')
                  <td
                    class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <span
                      class="bg-gradient-to-tl from-amber-500 to-yellow-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Owner</span>
                  </td>
                  @endif
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <button type="button" class="text-xs font-semibold leading-tight text-slate-400 ubahPengguna" value="{{ $p->id }}"> Edit </button>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <button type="button" class="text-xs font-semibold leading-tight text-slate-400 viewUser" value="{{ $p->id }}"> Lihat </button>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <form action="/data-pengguna/" method="post" class="hapusPengguna">
                      @csrf
                      @method('delete')
                      <button class="text-xs font-semibold leading-tight text-slate-400 tombol-hapus-pengguna" type="submit" value="{{ $p->id }}">Hapus</button>
                    </form>                  
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="d-flex justify-content-center mt-4 mb-4">
            {{ $pengguna->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div fixed-plugin>
  <a fixed-plugin-button class="bottom-7.5 right-7.5 text-xl z-990 shadow-soft-lg rounded-circle fixed cursor-pointer bg-white px-4 py-2 text-slate-700" data-bs-toggle="modal" data-bs-target="#modalPengguna" id="tambahPengguna">
    <i class="py-2 pointer-events-none fa fa-plus"></i>
  </a>
</div>

<!-- Modal -->
<div class="modal fade" id="modalPengguna" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 judulModal" id="judulModal">Tambah Data Pengguna</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/data-pengguna" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" id="id-pengguna">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control rounded border-slate-200 rounded border-slate-200" id="username-pengguna" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control rounded border-slate-200" id="password-pengguna" name="password" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-select" id="role-pengguna" name="role" required>
                    <option value="admin">Admin</option>
                    <option value="customers">Customers</option>
                    <option value="drivers">Drivers</option>
                    <option value="owners">Owner</option>
                </select>
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
<div class="modal fade" id="modalPenggunaUbah" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 judulModal" id="judulModal">Ubah Data Pengguna</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formUbah" method="post" enctype="multipart/form-data">
          @csrf
          @method('put')
          <input type="hidden" name="id" id="id-pengguna-ubah">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control rounded border-slate-200 rounded border-slate-200" id="username-pengguna-ubah" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control rounded border-slate-200" id="password-pengguna-ubah" name="password" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-select" id="role-pengguna-ubah" name="role" required>
                    <option value="admin">Admin</option>
                    <option value="customers">Customers</option>
                    <option value="drivers">Drivers</option>
                    <option value="owners">Owner</option>
                </select>
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
<div class="modal fade" id="viewUsers" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 judulModal" id="judulModal">Detail Pengguna</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-4">Username</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-6">
            <input for="username-pengguna-lihat" id="username-pengguna-lihat"></input>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">Password</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-6">
            <input for="password-pengguna-lihat" id="password-pengguna-lihat"></input>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">Role</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-6">
            <input for="role-pengguna-lihat" id="role-pengguna-lihat"></input>
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