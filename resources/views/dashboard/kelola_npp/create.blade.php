@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>KELOLA NPP</h2>
    </div>

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
                <div style="text-align: right; margin-left: -200px" class="col-md"><label for="no_agenda" class="form-label">Nomor Agenda :</label></div>
            </div>
        </div>
        <div class="col-md">
            <div class="pb-2">
                <input id="no_agenda" name="no_agenda" style="margin-left: -225px; height:30px; width:400px;" type="text" >
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md">
            <div>
                <div style="text-align: right; margin-left: -200px" class="col-md"><label for="nomor_npp" class="form-label">Nomor NPP :</label></div>
            </div>
        </div>
        <div class="col-md">
            <div class="pb-2">
                <input id='no_npp' style="margin-left: -225px; height:30px; width:400px;" type="text" name="no_npp">
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md">
            <div>
                <div style="text-align: right; margin-left: -200px" class="col-md"><label for="tanggal_terima" class="form-label">Tanggal Terima :</label></div>
            </div>
        </div>
        <div class="col-md">
            <div class="pb-2">
                <input id="tanggal_terima" style="margin-left: -225px; height:30px; width:400px;" type="date" name="tanggal_terima">
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md">
            <div>
                <div style="text-align: right; margin-left: -200px" class="col-md"><label for="nama_pja" class="form-label">PA Kirim :</label></div>
            </div>
        </div>
        <div class="col-md">
            <div class="pb-2">
                <select id="nama_pja" name="nama_pja" type="option" style="margin-left: -225px; height:30px; width:400px;" >
                    <option selected disabled value="silakan-pilih" style="line-height: 10px">Silakan Pilih</option>
                    <option value="(KEU) KEUANGAN">Akuntansi</option>
                    <option value="BIGDATA">Big Data Analytics</option>
                    <option value="INCUB">Business Incubation and Transformation</option>
                    <option value="CSP">Corporate Strategic Planning</option>
                    <option value="CULMAN">Culture Management</option>
                    <option value="CC103">Digitalisasi dan Quality Assurance</option>
                    <option value="CC201">Fund Management</option>
                    <option value="GENSUP">General Support</option>
                    <option value="GRC">Governance</option>
                    <option value="GRC2">Governance, Risk, Compliance and Quality, Safety, Health, Environment</option>
                    <option value="HUKUM">Hukum</option>
                    <option value="HCDEV">Human Capital Development</option>
                    <option value="(HC) SERVICE">Human Capital Service</option>
                    <option value="HCSTRA">Human Capital Strategy</option>
                    <option value="ITIO">Information Technology Infrastructure and Operations</option>
                    <option value="ITSD">Information Technology Strategy and Development</option>
                    <option value="CC105">International Sales and Operations</option>
                    <option value="(KEU) KEUANGAN">Investment Management</option>
                    <option value="SESPER">Kesekretariatan</option>
                    <option value="(KEU) KEUANGAN">Manajemen Keuangan</option>
                    <option value="CC202">Operasi Layanan Bisnis Jasa Keuangan</option>
                    <option value="(KEU) ASSET">Pengelolaan dan Optimalisasi Aset</option>
                    <option value="CC104">Pengelolaan Operasi dan Partnership</option>
                    <option value="CC101">Penjualan Korporat</option>
                    <option value="(KL) PENJUALAN RITEL">Penjualan Retail</option>
                    <option value="CC102">Product Management and Marketing</option>
                    <option value="(KEU) KEUANGAN">Proyek Pengembangan Sistem Keuangan</option>
                    <option value="SYARIAH">Proyek Pengembangan Syariah</option>
                    <option value="REG">Regional</option>
                    <option value="USO">Regulations and Universal Service Obligation</option>
                    <option value="CC200">Retail Service</option>
                    <option value="CC002">Satuan Pengawasan Intern</option>
                    <option value="CC204">SBU Lending and Saving</option>
                    <option value="SESDEKOM">Sekretaris Dekom</option>
                    <option value="CC203">Strategic Business Unit Digital Giropos</option>
                    <option value="PKBL">Synergy, Business and Alliance dan Program Kemitraan Bina Lingkungan</option>
                    <option value="(KEU) KEUANGAN">Treasury and Tax</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row g-4">
        <div class="col-md">
            <div>
                <div style="text-align: right; margin-left: -200px" class="col-md"><label for="no_nde" class="no_nde">Nomor NDE :</label></div>
            </div>
        </div>
        <div class="col-md">
            <div class="pb-2">
                <input id='no_nde' style="margin-left: -225px; height:30px; width:400px;" type="text" name="no_nde">
            </div>
        </div>
    </div>
    <div class="row g-4">
        <div class="col-md">
            <div>
                <div style="text-align: right; margin-left: -200px" class="col-md"><label for="tanggal_nde" class="form-label">Tanggal NDE :</label></div>
            </div>
        </div>
        <div class="col-md">
            <div class="pb-2">
                <input id='tanggal_nde' name="tanggal_nde" style="margin-left: -225px; height:30px; width:400px;" type="date">
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md">
            <div>
                <div style="text-align: right; margin-left: -200px" class="col-md"><label for="verifikator" class="form-label">Verifikator :</label></div>
            </div>
        </div>
        <div class="col-md">
            <div class="pb-2">
                <select id="verifikator" name="verifikator" type="option" style="margin-left: -225px; height:30px; width:400px;">
                    <option value="silakan-pilih" style="line-height: 10px" selected disabled>Silakan Pilih</option>
                    <option value="marliani">Marliani</option>
                    <option value="ari-hardiani">Ari Hardiani</option>
                    <option value="yulan-puspitasari">Yulan Puspitasari</option>
                    <option value="tya">Tya</option>
                    <option value="verificator5">Verificator 5</option>
                    <option value="verificator6">Verificator 6</option>
                </select>
            </div>
        </div>
    </div>

    <div style="text-align: center; margin-left: -100px; margin-top: 15px;">
        <!-- <button type="submit" class="btn btn-outline-dark">Reset</button>-->
        <button type="submit" class="btn btn-success">Simpan Data</button>
    </div>
    </form>
    </div>

    </div>


@endsection
