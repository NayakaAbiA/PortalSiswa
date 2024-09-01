<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900"> 
                    <!-- {{ __("ini dashboard!") }} -->
               

          <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-8">
                  <div class="card">
                    <div class="card-header"> TAMBAH DATA edit</div>

                    <form action="" method="POST">
                    @csrf
                    <div class="card-body"> 
                      <table class="table table-striped"> 
                                 <div class="mb-3">
                                    <label>NIS</label>
                                    <input type="text" class="form-control" name="nis" value="{{$siswas->nis}}" placeholder="Masukan Nama">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama" value="{{$siswas->nama}}" placeholder="Masukan Nama">
        
                                </div>

                                <div class="mb-3">
                                    <label >Kelas</label>
                                    <input type="text" class="form-control" name="kelas"value="{{$siswas->kelas}}" placeholder="Masukan Kelas">
        
                                </div>
                                <div class="mb-3">
                                    <label >Jurusan</label>
                                    <input type="text" class="form-control" name="jurusan"value="{{$siswas->jurusan}}" placeholder="Masukan Jurusan">
        
                                </div>
                                <div class="mb-3">
                                    <label >Gambar</label>
                                    <input type="text" class="form-control" name="gambar"value="{{$siswas->gambar}}" placeholder="Masukan Gambar">
        
                                </div>
                               
                                <button type="submit" class="btn btn-primary float-end">Simpan</button>
                    
                              </div>
                            </div>
                          </div>
                        </x-app-layout>
                        </table>
                    </div>
                    </form>
                  </div>
                </div>
             </div>
            </div>
          </body>
          </html>
            