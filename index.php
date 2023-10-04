<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
 
    <h1>PHP Dasar</h1>

    <?php

    $umur = 90;
    $nama = "rezahidayat";

    echo 'Umur : ' . $umur;
    echo '<br>';
    echo "Umur : $umur ";
    echo '<hr>';

    $array_nama = ['muhammad', 'rezaldi', 'hidayat'];

    echo 'Nama 1 : ' . $array_nama[0];
    echo '<br>';
    echo 'Nama 2 : ' . $array_nama[1];
    echo '<hr>';

    $arrray_identitas = [
        'reza' => ['nama' => 'reza', 'umur' => '90'],
        'hidayat' => ['nama' => 'hidayat', 'umur' => '95']
    ];

    $umur = 20;

    echo $umur;
    echo '<br>';

    echo $arrray_identitas['reza']['umur'];
    echo '<hr>';

    echo 'Perulangan foreach dari array <br>';

    foreach ($array_nama as $key => $isi) {

        $key += 1;
        echo 'Data Nama ke ' . $key . ' = ' . $isi . '<br>';

    }

    echo '<hr>';

    for ($i=0; $i <= 10; $i++) { 
        echo $i . '<br>';
    }

    echo '<hr>';
    // contoh cetak string dari php 
    echo 'Cetak dari PHP';

    ?>

</body>

</html>
