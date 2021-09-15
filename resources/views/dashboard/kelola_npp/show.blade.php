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

    <div>
        <div>
            <a style="height:30px; width:80px;" class="nav-link pt-1 pb-1 mb-3 btn-sm btn btn-outline-primary" aria-current="page" href="/dashboard/kelola_npp/">
                Kembali
            </a>
        </div>
    </div>
    <form method="post" action="/dashboard/kelola_npp">
        @csrf
    <div style="text-align: center; margin-left: -100px; margin-top: -40px" class="pb-2 mb-4 border-bottom">
        <h5>FORMULIR TAMBAH NPP BARU</h5>
    </div>

        <div class="col-lg-11">
            <div class="row g-4">
                <div class="col-md">
                    <div>
                        <div style="text-align: right; margin-left: -200px" class="col-md">
                            <label for="no_agenda" class="form-label">Nomor Agenda :</label>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div>
                        <div style="text-align: right; margin-left: -200px" class="col-md">
                            <label for="no_agenda" class="form-label">{{ $npp->no_agenda }}</label>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div>
                        <div style="text-align: right; margin-left: -200px" class="col-md">
                            <label for="no_agenda" class="form-label">No Npp :</label>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div>
                        <div style="text-align: right; margin-left: -200px" class="col-md">
                            <label for="no_agenda" class="form-label">{{ $npp->no_npp}}</label>
                        </div>
                    </div>
                </div>
        </div>

@endsection
