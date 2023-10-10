<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="../../public/css/style.css">
    <script type="text/javascript">

        function contoh() {

            swal({

                title: "Berhasil!",

                text: "Pop-up berhasil ditampilkan",

                icon: "success",

                button: true

            });

        }

    </script>
</head>

<div class="px-4 py-3">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SIAKAD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dosen</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <body>
        <?php
        //memanggil class database
        include '../classes/database.php';
        //instansisasi class database
        $db = new database;
        ?>

        <h3>Data Mahasiswa</h3>
        <a type="button" class="btn btn-primary mb-2 mt-2" href="input_mhs.php">Tambah Mahasiswa +</a>
        <?php
        if (isset($_GET['pesan'])) {
            $pesan = $_GET['pesan'];
            $alertClass = '';
            $alertText = '';
        
            if ($pesan == "Data telah dihapus") {
                $alertClass = 'alert-danger';
                $alertText = 'Data berhasil dihapus!';
            } elseif ($pesan == "Data telah ditambah") {
                $alertClass = 'alert-success';
                $alertText = 'Data berhasil ditambah!';
            } elseif ($pesan == "Data telah diedit") {
                $alertClass = 'alert-warning';
                $alertText = 'Data berhasil diedit!';
            }
        
            if (!empty($alertClass) && !empty($alertText)) {
                echo '<div class="alert ' . $alertClass . ' alert-dismissible">
                        ' . $alertText . '
                        <a href="tampil_mhs.php" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
                      </div>';
            }
        }
        ?>
        <div>
            <table style="margin-top:20;" class="table table-success table-striped table-bordered border-primary">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $no = 1;
                foreach ($db->tampil_mahasiswa() as $x) {
                    ?>
                    <tr>
                        <td style="text-align: center">
                            <?php echo $no++ ?>
                        </td>
                        <td>
                            <?php echo $x['nim'] ?>
                        </td>
                        <td>
                            <?php echo $x['nama'] ?>
                        </td>
                        <td>
                            <?php echo $x['alamat'] ?>
                        </td>
                        <td class="d-flex justify-content-center">
                            <a type="button" class="btn btn-warning me-2"
                                href="edit_mhs.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit </a>
                            <a type="button" class="btn btn-danger" onclick="contoh()"
                                href="proses_mhs.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus </a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </body>
</div>

</html>