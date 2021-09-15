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
    <img class="mb-4" src="/img/logo pos.png" alt="" width="80" height="80">
    @auth
    <h3> Welcome - {{ auth()->user()->fullname }} </h3>
    <a href="/dashboard"> <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Masuk Ke Dashboard</button> </a>
    @else
    <a href="/Login"> <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Masuk</button> </a> 
    <a href="/Register"> <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Daftar</button> </a>
    @endauth
   
  </form>
</main>

  </body>
</html>
