`<?php
    $nd = 'muhammad ';
    $nt = 'rizqi' ;
    ?>
<?php
    for ($r = 1; $r <= 100; $r++) {
        if ($r % 3 == 0 && $r %5 == 0 ) {
            echo $nd ." ". $nt ."<br>";
            
        }elseif ($r % 3 == 0){
            echo $nd ."<br>";
        }elseif ($r % 5 == 0 ){
            echo $nt ."<br>";
        }
        else {
            echo $r ."<br>";
            
        }
    }
    ?>