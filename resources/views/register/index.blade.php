<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pos Indonesia</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">

<main class="form-signin">
  <form action="/Register" method="post">
    @csrf
    <img class="mb-4" src="/img/logo pos.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 fw-normal">Buat Akun</h1>

    <div class="form-floating">
      <input type="text" name="username" class="form-control rounded-top @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
      <label for="username">Nama Pengguna</label>
      @error('username')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="passowrd" placeholder="Password" required>
        <label for="password">Kata Sandi</label>
        @error('password')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
      </div>
    <div class="form-floating">
        <input type="text" name="fullname" class="form-control @error('fullname') is-invalid @enderror" id="fullname" placeholder="Fullname" required value="{{ old('fullname') }}">
        <label for="fullname">Nama Lengkap</label>
        @error('fullname')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
        <label for="email">Alamat Email</label>
        @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <select id="level" name="level" class="form-control @error('level') is-invalid @enderror" id="level" placeholder="level" required>
        <option selected disabled>Pilih Level</option>
        <option value="pegawai">Pegawai</option>
        <option value="verificator">Verificator</option>
        <option value="otorisator">Otorisator</option>
        <option value="fiatur">Fiatur</option>
        <option value="region">Region</option>
        <option value="PJA">PJA</option>
      </select>
        <label for="level">Level</label>
        @error('level')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <select type="divisi" name="divisi" class="form-control @error('divisi') is-invalid @enderror" id="divisi" placeholder="divisi" required>
        <option selected disabled>--Pilih Divisi--</option>
        <option value="(KEU) KEUANGAN">Akuntansi</option>
        <option value="BIGDATA">Big Data Analytics</option>
        <option value="INCUB">Business Incubation and Transformation</option>
        <option value="CSP">Corporate Strategic Planning</option>
        <option value="CULMAN">Culture Management</option>
        <option value="CC103">Digitalisasi dan Quality Assurance</option>
        <option value="CC201">Fund Management</option>
        <option value="GENSUP">General Support</option>
        <option value="GRC">Governance</option>
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
        <label for="divisi">Divisi</label>
        @error('divisi')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>

    <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Daftar</button>
    <small>Sudah Punya Akun? <a href="/Login">Masuk Disini!</small>
  </form>
</main>

  </body>
</html>
