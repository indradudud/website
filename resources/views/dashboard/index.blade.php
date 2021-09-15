@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">HALAMAN DASHBOARD</h1>
    </div>

    <div>
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>
                        <p>NPP Diterima</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53</h3>
                        <p>NPP Disetujui</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3 style="color: white">44</h3>
                        <p style="color: white">NPP Ditunda</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                    <h3>65</h3>
                    <p>NPP Ditolak</p>
                </div>
            </div>
        </div>
    </div>

    <!--
    <div class="col-md">
        <input style="height:30px; width:200px; margin-left: 885px; margin-bottom: 15px;" style="height:30px; width:200px;" type="text" name="username" class="form-control rounded-top" id="username" placeholder="Cari disini">
    </div>
    -->

    <div class="table-responsive col-lg-11">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Username</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Level</th>
                    <th scope="col">Divisi</th>
                    <th scope="col">Action</th>
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
                        <a href="#" style="width: 30px; height: 30px;" class="badge bg-danger"><span style="width: 20px; height: 20px; margin-left: -3px;" data-feather="x-circle">Hapus</span></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!--
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
    -->

@endsection
