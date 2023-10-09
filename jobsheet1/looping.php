<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php
    echo "Pengulangan FOR Bilangan Genap dari 1 hingga 10 <br>";
    for($x=2; $x<=10;$x += 2)
        echo "$x <br> ";

    echo "<br>Pengulangan WHILE Bilangan Ganjil dari 1 hingga 10 <br>";
    $y=1;
    while ($y<10){
        echo "$y <br>";
        $y += 2;
    }

    echo "<br> Perulangan DO WHILE Bilangan Prima kurang dari 20<br>";
    $i = 0;
    do{
        $k=true;
        if ($i <= 1){
            $k = false;
        }
        else {
            for ($j=2;$j<$i;$j++){
                if ($i % $j == 0){
                    $k = false;
                }
            }
        }
        if ($k){
            echo $i."<br>";
        }
        $i++;
    }while ($i<20);
    ?>
</body>
</html>