@extends('customers.main')

@section('content')

    <div class="profile" data-profile="{{ session('flash') }}"></div>
    
    <nav class="absolute z-20 flex flex-wrap items-center justify-between w-full px-6 py-6 text-white transition-all shadow-none duration-250 ease-soft-in lg:flex-nowrap lg:justify-start" navbar-profile navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-6 py-1 my-4 flex-wrap-inherit">
            <nav>
            <!-- breadcrumb -->
            <ol class="flex flex-wrap pt-1 pl-2 pr-4 mr-12 bg-transparent rounded-lg sm:mr-16">
                <li class="leading-normal text-sm">
                <a class="opacity-50" href="javascript:;">Pages</a>
                </li>
                <li class="text-sm pl-2 capitalize leading-normal before:float-left before:pr-2 before:content-['/']" aria-current="page">Profile</li>
            </ol>
            <h6 class="mb-2 ml-2 font-bold text-white capitalize">Profile</h6>
            </nav>
            {{-- <div class="flex items-center justify-end">
            <a href="/logout" class="block px-4 py-2 font-semibold text-white transition-all ease-soft-in-out text-sm">
                <i class="fa fa-user sm:mr-1" aria-hidden="true"></i>
                <span class="hidden sm:inline">Logout</span>
            </a>
            </div> --}}
        </div>
    </nav>

    <div class="w-full px-6 mx-auto">
        <div class="relative flex items-center p-0 mt-6 overflow-hidden bg-center bg-cover min-h-75 rounded-2xl" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%">
          <span class="absolute inset-y-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-purple-700 to-pink-500 opacity-60"></span>
        </div>
        <div class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 -mt-16 overflow-hidden break-words border-0 shadow-blur rounded-2xl bg-white/80 bg-clip-border backdrop-blur-2xl backdrop-saturate-200">
          <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-auto max-w-full px-3">
              <div class="text-base ease-soft-in-out h-18.5 w-18.5 relative inline-flex items-center justify-center rounded-xl text-white transition-all duration-200">
                <img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-full shadow-soft-sm rounded-xl" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 flex sm:my-auto md:w-1/2 md:flex-none lg:w-4/12">
              <div class="h-full">
                <h3 class="mb-1">{{ ucwords(Auth::user()->username) }}</h3>
                <p class="mb-0 font-semibold leading-normal text-sm">{{ ucwords(Auth::user()->role) }}</p>
              </div>
            </div>
            <div class="drivers" data-flash="{{ session('flash') }}"></div>
            <div class="w-full px-6 py-6 mx-auto">
              <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3">
                  <div
                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto px-0 pt-0 pb-2">
                      <div class="p-0 overflow-x-auto">
                        @if($customers)
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
                                </th>
                                <th
                                  class="p-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                </th>
                                
                              </tr>
                            </thead>

                            <tbody>
                              
                              <tr>
                                <td class="p3 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                  <div class="flex px-2 py-1 ml-6">
                                    <div>
                                      @if ($customers->foto_sim)
                                        <img src="{{ asset('storage/' . $customers->foto_sim) }}"
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
                                  <h6 class="px-3 mb-0 text-sm leading-normal">{{ $customers->nama }}</h6>
                                  <p class="px-3 mb-0 text-xs leading-tight text-slate-400">{{ $customers->nik }}</p>
                                </td>
                                <td class="p3 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                  <h6 class="px-3 mb-0 text-sm leading-normal">{{ $customers->alamat }}</h6>
                                  <p class="px-3 mb-0 text-xs leading-tight text-slate-400">{{ $customers->telepon }}</p>
                                </td>
                                <td class="p-3 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                  <span class="text-xs font-semibold leading-tight text-slate-400">{{ $customers->tgl_lahir }}</span>
                                </td>
                                <td class="p-3 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                  <button type="button" class="text-xs font-semibold leading-tight text-slate-400 editCust" value="{{ $customers->id }}" data-bs-toggle="modal" data-bs-target="#editCust"> Edit </button>
                                </td>
                                <td class="p-3 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                  <button type="button" class="text-xs font-semibold leading-tight text-slate-400 viewCustomers" value="{{ $customers->id }}"> Lihat </button>
                                </td>
                    
                              </tr>
                              
                            </tbody>
                          </table>
                          @else
                          <div class="col-lg-12">
                            <h1 class="font-bold text-black capitalize fs-5 mb-3">Isi Data Diri</h1>
                            <form action="/data-customers" method="post" enctype="multipart/form-data">
                              @csrf
                              <input type="hidden" name="customers_tambah" value="1">                           
                              <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">                           
                              <div class="row">
                                <div class="col"> 
                                  <div class="mb-3">
                                      <label for="nik" class="form-label">Nik Anda</label>
                                      <input type="text" class="form-control form-control-sm" id="nik" name="nik">                                     
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Anda</label>
                                    <input type="text" class="form-control form-control-sm" id="nama" name="nama">                            
                                  </div>
                                </div>
                              </div>
                              
                              <div class="row">
                                <div class="col">
                                  <div class="mb-3">
                                  <label for="telepon" class="form-label">No Telp Anda</label>
                                    <input type="text" class="form-control form-control-sm" id="telepon" name="telepon">                                  
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat Anda</label>
                                    <input type="text" class="form-control form-control-sm" id="alamat" name="alamat">                                   
                                  </div>
                                </div>
                              </div>                              
                              <div class="row">
                                <div class="col">
                                  <div class="mb-3">
                                    <label for="tgl_lahir" class="form-label">Tgl Lahir Anda</label>
                                    <input type="date" class="form-control form-control-sm" id="tgl_lahir" name="tgl_lahir">                    
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="mb-3">
                                    <label for="foto_sim" class="form-label">Foto SIM Anda</label>
                                    <input type="file" class="form-control form-control-sm" id="foto_sim" name="foto_sim">                                   
                                  </div>
                                </div>
                              </div>
                              <button type="submit" class="btn btn-primary mt-3 mb-5">Simpan</button>
                            </form>
                          </div>                         
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>

      <!-- Modal Ubah -->
      <div class="modal fade" id="editCust" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5 judulModal" id="judulModal">Ubah Data Diri Anda</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form id="formEditCust" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="hidden" name="id" id="id-ubah">
                <input type="hidden" name="user_id" id="user_id-ubah">
                {{-- <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"> --}}
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
                </div>
                <div class="mb-3">
                  <div class="row"><hr>
                    <div class="col-lg-10 mt-4">
                      <label class="form-label" for="foto_sim">Foto SIM</label>
                      <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="foto_sim" type="file" name="foto_sim" onchange="priviewSIMDriver()">
                    </div>
                    <div class="col-lg-2 mt-4">
                      <img id="foto_sim-ubah" src="" alt="" class="priview-sim-driver img-fluid col-sm-10">
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
              <h1 class="modal-title fs-5 judulModal" id="judulModal">Detail Data Diri Anda</h1>
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
              
            <div class="modal-footer">
              <button type="button" class="block text-white bg-cyan-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
@endsection