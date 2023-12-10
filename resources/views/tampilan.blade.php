<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Daftar Nama Teman</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

        <!-- Styles -->
        <style>
            body {
                font-family: 'figtree', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class=" d-flex flex-row position-fixed bottom-0 end-0 m-4" style="z-index: 100" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <a class="btn btn-primary btn-lg" href="#">Tambahkan data teman </a>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <form action="{{route('mahasiswa.store')}}" method="POST">
                    @csrf
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahkan Todo</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                            <label for="basic-url" class="form-label">Masukkan Nama</label>
                            <input name="nama" placeholder="Dian Sastro" type="text" class="form-control">
                            <label for="basic-url" class="form-label">Masukkan Umur</label>
                            <input name="umur" placeholder="16" type="number" class="form-control">
                            <label for="basic-url" class="form-label">Masukkan Hobi</label>
                            <input name="hobi" placeholder="Makan, Berenang" type="text" class="form-control">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary"  >Save changes</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        <div class="d-flex container justify-content-center align-items-center flex-column" style="height: 100vh;">
            <h1><strong> Nama Teman</strong></h1>
            <div class="d-flex gap-3 flex-wrap justify-content-center">
                @foreach ($mahasiswas as $i)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">{{$i->nama}}o</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary">Umur {{$i->umur}} tahun</h6>
                      <p class="card-text">{{$i->hobi}}</p>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
