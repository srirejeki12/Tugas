<?php

$warna = ["Hijau", "Kuning", "Kelabu", "Merah Muda", "Biru"];

?>

<!DOCTYPE html>
<head>
    <title>Balonku</title>
</head>
<body>
    <p>

    Balonku ada lima </br>
    Rupa-rupa warnanya </br>

    <?php
    for($i = 0; $i <4; $i++) {
        echo "$warna[$i] ";
    }

    ?>
    dan 
    <?php
    echo "$warna[4] ";

    ?>
    meletus balon
    <?php
    echo "$warna[0] ";
    ?>

    DOR!!! </br>
    hatiku sangat kacau...

    </body>
    </html>
    