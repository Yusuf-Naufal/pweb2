<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>
    <h1>Masukkan Bilangan</h1>
    <form method="POST" action="">
        <table>
            <tr>
                <td>Masukkan Panjang</td>
                <td>:</td>
                <td><input type="number" name="panjang" placeholder="panjang"><br></td>
            </tr>
            <tr>
                <td>Masukkan Lebar</td>
                <td>:</td>
                <td><input type="number" name="lebar" placeholder="lebar"><br></td>
            </tr>
            <tr>
                <td><button type="submit">Hasil</button></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </form>
    <?Php
    if (isset($_POST['panjang'])) {
        $p = $_POST['panjang'];
        $l = $_POST['lebar'];

        function persegi_panjang($p, $l)
        {
            return $p * $l;
        }
        function lingkaran($r)
        {
            return 3.14 * $r * $r;
        }
        echo "Luas Persegi Panjang : " . persegi_panjang($p, $l) . "<br";
    }
    ?>
</body>

</html>