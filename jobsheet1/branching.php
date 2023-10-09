<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>

<body>
    <h1>Masukkan Bilangan</h1>
    <form method="POST" action="">
        <div>
            <input type="number" name="bilangan" placeholder="Masukkan Bilangan">
            <button type="submit" class="btn btn-success">Cek</button>
        </div>
    </form>

    <?php
    if (isset($_POST['bilangan'])) {
        $x = $_POST['bilangan'];

        if (is_numeric($x)) {
            echo "Nilai X = $x <br><br>";
            if ($x > 0) {
                echo "$x adalah Bilangan Positif";
            } elseif ($x < 0) {
                echo "$x adalah Bilangan Negatif";
            } else {
                echo "$x adalah Bilangan Nol";
            }
        } else {
            echo "Masukkan Angka!!";
        }
    }
    ?>
</body>

</html>