<body>
    <?php
    //memanggil class model database
    include_once '../../config.php';
    include_once '../../controllers/MahasiswaController.php';
    require '../../index.php';

    //instansiasikan class database 
    $database = new Database;
    $db = $database->getKoneksi();

    $mahasiswaController = new MahasiswaController($db);
    $mahasiswa = $mahasiswaController->getAllMahasiswa();
    ?>
    <div class="px-5">
        <h3>Data Mahasiswa</h3>
        <a type="button" class="btn btn-primary mb-2 mt-2" href="tambahMahasiswa">Tambah Mahasiswa +</a>        
        <div>
            <table style="margin-top:20;" class="table table-success table-striped table-bordered border-primary">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $no = 1;
                foreach ($mahasiswa as $x) {
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
                            <?php echo $x['tmpt_lhr'] ?>
                        </td>
                        <td>
                            <?php echo $x['jns_klmn'] ?>
                        </td>
                        <td>
                            <?php echo $x['agama'] ?>
                        </td>
                        <td>
                            <?php echo $x['alamat'] ?>
                        </td>
                        <td class="d-flex justify-content-center">
                            <a type="button" class="btn btn-warning me-2" href="editMahasiswa/<?php echo $x['id']; ?>">Edit
                            </a>
                            <a type="button" class="btn btn-danger" onclick="return confirm('Apakah Yakin?')"
                                href="hapusMahasiswa/<?php echo $x['id']; ?>">Hapus </a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>
</div>