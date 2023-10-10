<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="../../public/css/style.css">
</head>

<body>
    <div class="container">
        <div class="content">
            <h3>Tambah Data Dosen</h3>
            <form action="proses_dosen.php?aksi=tambah" method="post">
                <table>
                    <div>
                        <label for="exampleFormControlInput1" class="form-label">NIDN</label>
                        <input type="text" name="nidn" class="form-control" placeholder="Masukkan NIDN">
                    </div>
                    <div>
                        <label for="exampleFormControlInput1" class="form-label">Home Based</label>
                        <input type="text" name="home_based" class="form-control" placeholder="Masukkan home_based">
                    </div>
                    <div>
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan nama">
                    </div>
                    <div>
                        <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control"
                            placeholder="Masukkan Tempat Lahirmu">
                    </div>
                    <div>
                        <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control">
                    </div>
                    <div>
                        <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                            <option value="Laki - Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div>
                        <label for="exampleFormControlInput1" class="form-label">Agama</label>
                        <select class="form-select" name="agama" aria-label="Default select example">
                            <option value="" disabled selected>Pilih Agama</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Islam">Islam</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Konghuchu">Konghuchu</option>
                        </select>
                    </div>
                    <div>
                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" rows="3"></textarea>
                    </div>
                    <div>
                        <label for="exampleFormControlInput1" class="form-label">KBK</label>
                        <input type="text" name="kbk" class="form-control" placeholder="Masukkan Kbk">
                    </div>
                    <div>
                        <br>
                        <td><input type="submit" value="Simpan" class="btn btn-success"></td>
                    </div>
                </table>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>