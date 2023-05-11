<?php
$mahasiswa =
[
    [
        'nrp' => '223040104',
        'nama' => 'Muhammad Rizqi Saputra',
        'email' => 'rizqisaputra666@gmail.com',
        'jurusan' => 'Teknik informatika',
        'foto' => 'fototugas5.jpeg'
    ],
    [
        'nrp' => '223040105',
        'nama' => 'Zacky Azmi Asikin',
        'email' => 'zack123@gmail.com',
        'jurusan' => 'Teknik informatika',
        'foto' => 'fototugas5.jpeg'
    ],
    [
        'nrp' => '223040106',
        'nama' => 'M.Roby.A',
        'email' => 'mroby223@gmail.com',
        'jurusan' => 'Teknik informatika',
        'foto' => 'fototugas5.jpeg'
    ],
    [
        'nrp' => '223040107',
        'nama' => 'Muhammad Umar Fauzy',
        'email' => 'umarfauzy45@gmail.com',
        'jurusan' => 'Teknik informatika',
        'foto' => 'fototugas5.jpeg'
    ],
    [
        'nrp' => '223040108',
        'nama' => 'Bagus Geni Hurip',
        'email' => 'bagusgeni@gmail.com',
        'jurusan' => 'Teknik informatika',
        'foto' => 'fototugas5.jpeg'
    ],
    [
        'nrp' => '223040109',
        'nama' => 'Sayidina Dafa',
        'email' => 'dafasay234@gmail.com',
        'jurusan' => 'Teknik informatika',
        'foto' => 'fototugas5.jpeg'
    ],
    [
        'nrp' => '223040110',
        'nama' => 'Dena Dwi Asti',
        'email' => 'nanacan@gmail.com',
        'jurusan' => 'Teknik informatika',
        'foto' => 'fototugas5.jpeg'
    ],
    [
        'nrp' => '223040111',
        'nama' => 'Sherly ',
        'email' => 'sherly2341@gmail.com',
        'jurusan' => 'Teknik informatika',
        'foto' => 'fototugas5.jpeg'
    ],
    [
        'nrp' => '223040112',
        'nama' => 'Abil Padilah',
        'email' => 'abilpadlah@gmail.com',
        'jurusan' => 'Teknik informatika',
        'foto' => 'fototugas5.jpeg'
    ],
    [
        'nrp' => '223040113',
        'nama' => 'Bagus',
        'email' => 'bagus212@gmail.com',
        'jurusan' => 'Teknik informatika',
        'foto' => 'fototugas5.jpeg'
    ]
    ];
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>tugas 5a</title>
        <style>
            img{   
                    width: 100px;
                    height: 150px; 
            }
            </style>
    </head>
    <body>
        <h2> Daftar Mahasiswa </h2>
        <?php foreach($mahasiswa as $r) {
            ?>
            <ul>
                <li><img src="img/<?= $r['foto'];?>"></li>
                <li>Nama : <?= $r['nama'];?></li>
                <li>NRP : <?= $r['nrp'];?></li>
                <li>Jurusan : <?= $r['jurusan'];?></li>
                <li>Email : <?= $r['email'];?></li>
        </ul>
        <?php } ?>
        
    </body>
    </html>