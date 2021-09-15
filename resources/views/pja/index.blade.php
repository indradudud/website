@extends('pja.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">HALAMAN PJA</h1>
    </div>

    <div class="row">
        <div class="col-lg-2 col-4">
            <a style="font-size: 14px; height: 30px; width: 180px;" class="nav-link pt-1 pb-1 mb-3 btn-sm btn btn-outline-primary" aria-current="page" href="/dashboard/kelola_npp/create">
                Tambah PJA
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
              <th scope="col" style="text-align: center">NO.</th>
              <th scope="col" style="text-align: center">KODE PJA</th>
              <th scope="col" style="text-align: center">NAMA PJA</th>
              <th scope="col" style="text-align: center">DIVISI</th>
              <th scope="col" style="text-align: center">LOKASI</th>
              <th scope="col" style="text-align: center">ACTION</th>
            </tr>
          </thead>

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
