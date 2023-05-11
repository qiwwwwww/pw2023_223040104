<?php
// Array Multidimensi
//Array di dalam array
$mahasiswa = [
['nama' => 'iki',
'binatang' => '🐫',
'makanan' => ['☕','🍺','🍚']
],
['nama' => 'dafa',
'binatang' => '🐥',
'makanan' => ['🍾']
],
['nama' => 'obi',
'binatang' => '🐷',
'makanan' => ['🍷','🌵']
],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan1</title>
</head>
<body>
    <h2>daftar mahasiswa</h2>
    <?php foreach ($mahasiswa as $mhs) {?>
        <ol>
            <li>Nama :<?= $mhs['nama'];?></li>
            <li>Makanan fav : 
                <?php foreach($mhs['makanan'] as $food) {
                    echo $food;
                } ?>
            </li>
            <li>peliharaan :<?= $mhs['binatang'];?></li>
    </ol>

    <?php } ?>
</body>
</html>