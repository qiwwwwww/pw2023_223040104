<?php
require('functions.php');
$title = 'Form Tamabah Data';

// insert data ke tabel mahasaiswa jika tombol di klik
if (isset($_POST['tambah'])) {
   if (tambah($_POST) > 0){
        echo "<script>
        alert('Data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>";
    }

}
require('views/tambah.view.php');