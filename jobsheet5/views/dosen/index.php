<body>
    <?php
    //memanggil class model database
    include_once '../../config.php';
    include_once '../../controllers/DosenController.php';
    require '../../index.php';

    //instansiasikan class database 
    $database = new Database;
    $db = $database->getKoneksi();

    $dosenController = new DosenController($db);
    $dosen = $dosenController->getAllDosen();
    ?>
    <div class="px-5">
        <h3>Data Dosen</h3>
        <a type="button" class="btn btn-primary mb-2 mt-2" href="tambahDosen">Tambah Dosen +</a>
        <?php
        ?>
        <div>
            <table style="margin-top:20;" class="table table-success table-striped table-bordered border-primary">
                <tr>
                    <th>No</th>
                    <th>NIDN</th>
                    <th>Nama</th>
                    <th>Home Based</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $no = 1;
                foreach ($dosen as $x) {
                    ?>
                    <tr>
                        <td style="text-align: center">
                            <?php echo $no++ ?>
                        </td>
                        <td>
                            <?php echo $x['nidn'] ?>
                        </td>
                        <td>
                            <?php echo $x['nama'] ?>
                        </td>
                        <td>
                            <?php echo $x['home_based'] ?>
                        </td>
                        <td>
                            <?php echo $x['tempat_lahir'] ?>
                        </td>
                        <td>
                            <?php echo $x['tanggal_lahir'] ?>
                        </td>
                        <td>
                            <?php echo $x['jenis_kelamin'] ?>
                        </td>
                        <td>
                            <?php echo $x['agama'] ?>
                        </td>
                        <td>
                            <?php echo $x['alamat'] ?>
                        </td>
                        <td class="d-flex justify-content-center">
                            <a type="button" class="btn btn-warning me-2" href="editDosen/<?php echo $x['id']; ?>">Edit
                            </a>
                            <a type="button" class="btn btn-danger" onclick="return confirm('Apakah Yakin?')"
                                href="hapusDosen/<?php echo $x['id']; ?>">Hapus </a>
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