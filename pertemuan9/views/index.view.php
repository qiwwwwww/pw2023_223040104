
   
<?php require('partials/header.php');?>
  <?php require('partials/nav.php');?>



<div class="Halaman Home">
    <h1>Halaman Home</h1>

    <h3>Daftar Mahaiswa</h3>
    <?php foreach( $students as $student) : ?>
        <ul>
            <li>Nama: <?= $student["nama"];?></li>
            <li>Nama: <?= $student["npm"];?></li>
            <li>Nama: <?= $student["email"];?></li>
        </ul>

        <?php endforeach; ?>
        </div>
        
 <?php require('partials/footer.php');