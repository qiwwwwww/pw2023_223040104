<?php
// Array Multidimensi
//Array di dalam array
$mahasiswa = [
['iki', '🐫','☕'],
['dafa', '🐥', 🍾],
['obi', '🐷', '🍷'],
];

echo $mahasiswa
die;
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
            <li>Nama :<?= $mhs[0];?></li>
            <li>Makanan fav :<?= $mhs[]

    <?php } ?>
</body>
</html>