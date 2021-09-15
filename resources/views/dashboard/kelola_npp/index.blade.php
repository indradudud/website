@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>KELOLA NPP</h2>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <div class="row">
        <div class="col-lg-2 col-4">
            <a style="font-size: 14px; height: 30px; width: 165px;" class="nav-link pt-1 pb-1 mb-3 btn-sm btn btn-outline-primary" aria-current="page" href="/dashboard/kelola_npp/create">
                Tambah NPP Baru
            </a>
        </div>

        <div class="col-lg-2 col-4">
            <form action="/dashboard/kelola_npp">
                <div class="input-group mb-3">
                    <input style="font-size: 14px; height: 30px;" type="text" class="form-control"
                        placeholder="Cari No. NPP" name="search" value="{{ request('search') }}">
                    <button style="font-size: 14px; height: 30px; align-text: center;"
                        class="btn btn-outline-secondary" type="submit">
                        <span data-feather="search" style="width: 14px; height: 14px; margin-top: -8px;"></span>
                    </button>
                </div>
            </form>
        </div>

        <div class="dropdown col-lg-2 col-4">
            <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2"
                data-bs-toggle="dropdown" aria-expanded="false">
                Filter by
            </button>
            <ul class="dropdown-menu dropdown-menu" aria-labelledby="dropdownMenuButton2">
                <li><a class="dropdown-item" href="#">Region</a></li>
                <li><a class="dropdown-item" href="#">Status</a></li>
                <li><a class="dropdown-item" href="#">Disposisi</a></li>
            </ul>
        </div>

        <div class="col-lg-6 col-6 d-flex justify-content-end">
            <label for="show">
                Jumlah data per halaman
                <select id="sum" name="sum" class="form" placeholder="sum" required>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </label>
        </div>
    </div>

    <div class="table-responsive border-bottom lg-8">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col" style="text-align: center">No.</th>
                    <th scope="col" style="text-align: center">No. Agenda</th>
                    <th scope="col" style="text-align: center">No. NPP</th>
                    <th scope="col" style="text-align: center">Tanggal Terima</th>
                    <th scope="col" style="text-align: center">PJA</th>
                    <th scope="col" style="text-align: center">Region</th>
                    <th scope="col" style="text-align: center">Status</th>
                    <th scope="col" style="text-align: center">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($npps as $key => $npp)
                <tr>
                    <!-- <td style="text-align: center">{{ $loop->iteration }}</td> -->
                    <td style="text-align: center">{{ $npps->firstItem() + $key }}</td>
                    <td style="text-align: center">{{ $npp->no_agenda }}</td>
                    <td style="text-align: center">{{ $npp->no_npp }}</td>
                    <td style="text-align: center">{{ $npp->tanggal_terima }}</td>
                    <td style="text-align: center"></td>
                    <td style="text-align: center"></td>
                    <td style="text-align: center"></td>
                    <td style="text-align: center">
                        <!-- <a href="#" style="width: 30px; height: 30px;" class="badge bg-info"><span style="width: 20px; height: 20px; margin-left: -3px;" data-feather="eye">Lihat</span></a>
                        <a href="#" style="width: 30px; height: 30px;" class="badge bg-warning"><span style="width: 20px; height: 20px; margin-left: -3px;" data-feather="edit">Edit</span></a>
                        <form action="/dashboard/kelola_npp/{{ $npp->no_npp }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button style="width: 30px; height: 30px;" class="badge bg-danger border-0" onclick="return confirm('Kamu Yakin Akan Menghapusnya?')"><span data-feather="x-circle"></span></button>
                        </form>
                        -->

                        <div class="btn-group btn-group-sm">
                            <a href="/dashboard/kelola_npp/" type="button" class="btn btn-success">Lihat</a>
                            <a href="/dashboard/kelola_npp/" type="button" class="btn btn-warning">Edit</a>
                            <form action="/dashboard/kelola_npp/{{ $npp->no_npp }}" method="post" class="d-line">
                                @method('delete')
                                @csrf
                            <button class="btn btn-danger border-0" onclick="return confirm('Apakah Kamu Yakin Untuk Menghapus Ini?')" type="submit">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="row mt-4">
            <div class="col-lg-3 col-6 mt-2">
                <p>Menampilkan {{ $npps->firstItem() }} - {{ $npps->lastItem() }} dari {{ $npps->total() }} data</p>
            </div>
            <div class="col-9 d-flex justify-content-end">
                <div>
                    {{ $npps->links() }}
                </div>
            </div>
    </div>

@endsection
