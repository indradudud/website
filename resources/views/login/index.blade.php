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
  @if(session()->has('berhasil'))
  <div class="alert alert-success alert-dismissible fade show form-control" role="alert">
    {{ session('berhasil') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  @if(session()->has('loginError'))
  <div class="alert alert-danger alert-dismissible fade show form-control" role="alert">
    {{ session('loginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  <form action="/Login" method="post">
    @csrf
    <img class="mb-4" src="/img/logo pos.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 fw-normal">MASUK</h1>

    <div class="form-floating">
      <input type="text" name='username' class="form-control rounded-top @error('username') is-invalid @enderror" id="username" placeholder="Username" autofocus required>
      <label for="username">Nama Pengguna</label>
      @error('username')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" name='password' class="form-control @error('username') is-invalid @enderror" id="password" placeholder="Password" required>
      <label for="password">Kata Sandi</label>
      @error('password')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Masuk</button>
    <small>Belum Punya Akun? <a href="/Register">Daftar Disini!</small>
  </form>
</main>

  </body>
</html>
