<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="../../public/css/style.css">
</head>

<body>
    <div class="container">
        <div class="content">
                <h3>Tambah Data Mahasiswa</h3>
                <form action="proses_mhs.php?aksi=tambah" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">NIM</label>
                        <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" rows="3"></textarea>
                    </div>
                    <div>
                        <input type="submit" value="Simpan" class="btn btn-primary">
                    </div>
                </form>
        </div>
    </div>

</body>

</html>