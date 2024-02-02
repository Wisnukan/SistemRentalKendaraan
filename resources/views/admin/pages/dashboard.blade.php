@extends('admin.main')

@section('content')
<div class="feedback" data-flash="{{ session('flash') }}"></div>
    <!-- cards -->
    <div class="w-full px-6 py-6 mx-auto">
      <!-- row 1 -->
      <div class="flex flex-wrap -mx-3">
        <!-- card1 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                    <p class="mb-0 font-sans text-sm font-semibold leading-normal">Pendapatan</p>
                    <h5 class="mb-0 font-bold">
                      <span class="text-sm leading-normal font-weight-bolder text-lime-500">+{{ number_format($pendapatan, 0, ',', '.') }}</span>
                    </h5>
                  </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                    <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- card2 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                    <p class="mb-0 font-sans text-sm font-semibold leading-normal">Kendaraan</p>
                    <h5 class="mb-0 font-bold">
                      {{ $kendaraan }}
                      <span class="text-sm leading-normal font-weight-bolder text-lime-500">+3</span>
                    </h5>
                  </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                    <i class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- card3 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                    <p class="mb-0 font-sans text-sm font-semibold leading-normal">Pengguna</p>
                    <h5 class="mb-0 font-bold">
                      {{ $user }}
                      <span class="text-sm leading-normal text-red-600 font-weight-bolder">-2</span>
                    </h5>
                  </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                    <i class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- card4 -->
        <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                    <p class="mb-0 font-sans text-sm font-semibold leading-normal">Pesanan</p>
                    <h5 class="mb-0 font-bold">
                      {{ $pesanan_total }}
                      <span class="text-sm leading-normal font-weight-bolder text-lime-500">+5</span>
                    </h5>
                  </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                    <i class="ni leading-none ni-cart text-lg relative top-3.5 text-white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- cards row 3 -->

      <div class="w-full px-0 py-2 mx-auto">
        <div class="flex flex-wrap -mx-3">
          <div class="flex-none w-full max-w-full px-3 mt-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="w-full px-6 py-6 mx-auto">
                <div class="flex flex-wrap -mx-3">
                  <div class="flex-none w-full max-w-full px-3">
                    <div
                      class="relative flex flex-col min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-md rounded-2xl bg-clip-border">
                      <div class="flex-auto px-0 pt-0">
                        <div class="p-0 overflow-x-auto">
                          <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                              <tr>
                                <th
                                  class="px-3 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                  #</th>
                                <th
                                  class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                  Ulasan</th>
                                <th
                                  class="px-6 py-2 text-center font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                  Penilaian</th>
                                  <th
                                  class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                </th>
                                <th
                                  class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                </th>
                              </tr>
                            </thead>
              
                            <tbody>
                              @foreach ($feedback as $p)
                              <tr>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                  <div class="flex px-2 py-1">
                                    <div class="flex flex-col justify-center">
                                      <h6 class="mb-0 text-sm leading-normal">{{ $p->id }}</h6>
                                    </div>
                                  </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                  <p class="mb-0 text-xs font-semibold leading-tight text-truncate" style="max-width: 700px;">{{ $p->ulasan }}</p>
                                </td>
                                <td class="px-6 py-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent" style="width: 150px">
                                  <div class="d-flex justify-content-center align-items-center">
                                      @for ($i = 0; $i < $p->penilaian; $i++)
                                        <img src="../assets/img/star.png" width="20px" alt="" class="mr-1">
                                      @endfor
                                    </div>
                                </td>
                                <td class="px-6 py-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                  <button type="button" class="text-xs font-semibold ms-4 leading-tight text-slate-400 viewFB" value="{{ $p->id }}"> Lihat </button>
                                </td>
                                <td class="px-6 py-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                  <form action="/data-feedback/" method="post" class="hapusFeedback">
                                    @csrf
                                    @method('delete')
                                    <button class="text-xs font-semibold leading-tight text-slate-400 tombol-hapus-feedback" type="submit" value="{{ $p->id }}">Hapus</button>
                                  </form>                  
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                        <div class="d-flex justify-content-center mt-4 mb-4">
                          {{ $feedback->links() }}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <!-- cards row 4 -->

      @include('../admin/layout/partials/footer')
    </div>
    <!-- end cards -->

    <!-- Card View -->
    <div class="modal fade" id="viewFeedback" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5 judulModal" id="judulModal">Detail Feedback</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
          </div>
          <div class="modal-body">
            <div class="row pb-3 mb-2">
              <div class="col-sm d-flex align-items-center justify-content-center">
                <div class="d-flex justify-content-center align-items-center" id="penilaian-view">
                  
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-sm-3">Ulasan</div>
              <div class="col-sm-1">:</div>
              <div class="col-sm-7">
                <input for="ulasan-lihat" id="ulasan-lihat" style="width: 480px;"></input>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-sm-3">Pemesan</div>
              <div class="col-sm-1">:</div>
              <div class="col-sm-7">
                <input for="pemesan-lihat" id="pemesan-lihat" style="width: 480px;"></input>
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