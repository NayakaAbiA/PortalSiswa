<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .mx-auto { width: 800px; }
        .card { margin-top: 10px; }
    </style>
</head>
<body>
    <div class="mx-auto">
        <div class="card">
        <div class="card-header">
                Tambah tugas
            </div>
        <div class="card-body">
        <form action="proses_tambah.php" method="post">
            <div class="mb-3 row">
                <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nis" name="nis" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-sm-10">
                <select class="form-select" id="kelas" name="kelas" required>
                    <option value="">- Pilih Kelas -</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                <select class="form-select" id="jurusan" name="jurusan" required>
            
                <option value="">- Pilih Jurusan -</option>
                <option value="TKR" >TKR</option>
                <option value="TKJ" >TKJ</option>
                <option value="RPL" >RPL</option>
                <option value="OTKP">OTKP</option>
                <option value="AK" >AK</option>
                <option value="SK" >SK</option>
                </select>
            </div>
            </div>
            <div class="mb-3 row">
                <label for="gambar_tugas" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                <input type="file" class="form-control" id="gambar_tugas" name="gambar_tugas" required>
                </div>
            </div>
            <div class="col-12">
                <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary">
            </div>
        </form>
        </div>
        </div>
    </div>
</body>
</html>