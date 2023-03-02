<?php
$r = "4";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo"Aku adalah angka <b>$r</b>"; ?> <br>
    <?php $r = $r * 5 ?>
    <?php echo "Jika aku dikali 5, maka aku sekarang menjadi <b>$r</b>"?> <br>
    <?php $r = $r / 2 ?>
    <?php echo"jika aku dibagi 2, maka aku sekarang menjadi <b>$r</b>"?> <br>
    <?php $r = $r + 75 ?>
    <?php echo"jika aku ditambah 75, maka aku sekarang menjadi <b>$r</b>"?> <br>
    <?php $r = $r - 20 ?>
    <?php echo"jika aku dikurang 20, maka aku sekarang menjadi <b>$r</b>"?>
    
</body>
</html>