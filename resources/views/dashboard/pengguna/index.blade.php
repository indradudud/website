@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">HALAMAN PENGGUNA</h1>
    </div>

    <div class="row">
        <div class="col-lg-2 col-4">
            <a style="font-size: 14px; height: 30px; width: 180px;" class="nav-link pt-1 pb-1 mb-3 btn-sm btn btn-outline-primary" aria-current="page" href="/dashboard/kelola_npp/create">
                Tambah Pengguna
            </a>
        </div>

        <div class="col-lg-2 col-4">
            <input style="text-align: center; font-size: 14px; height: 30px; width: 180px; margin-bottom: 15px;" type="text" name="username" class="form-control rounded-top" id="username" placeholder="Cari Username">
        </div>
    </div>

    <div class="table-responsive border-bottom lg-8">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col" >NO.</th>
              <th scope="col" >USERNAME</th>
              <th scope="col" >FULLNAME</th>
              <th scope="col" >EMAIL</th>
              <th scope="col" >LEVEL</th>
              <th scope="col" >DIVISI</th>
              <th scope="col" >ACTION</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->fullname }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->level }}</td>
                <td>{{ $user->divisi }}</td>
                <td>
                    <a href="#" style="width: 30px; height: 30px;" class="badge bg-info"><span style="width: 20px; height: 20px; margin-left: -3px;" data-feather="eye">Lihat</span></a>
                    <a href="#" style="width: 30px; height: 30px;" class="badge bg-warning"><span style="width: 20px; height: 20px; margin-left: -3px;" data-feather="edit">Edit</span></a>
                    <form action="/dashboard/pengguna/{{ $user->id }}" method="post" class="d-line">
                        @method('delete')
                        @csrf
                    <button class="btn btn-danger border-0" onclick="return confirm('Apakah Kamu Yakin Untuk Menghapus Ini?')" type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

        </table>
      </div>

      <div class="pt-3 pb-3 mb-3">
          <label for="show">
              Jumlah data per halaman
              <select id="sum" name="sum" class="form" id="sum" placeholder="sum" required>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
               </select>
            </label>
      </div>

@endsection
